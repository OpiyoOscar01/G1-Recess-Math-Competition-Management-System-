package com.G_1.Recess.MathCompMagtSyst.Commons;

import com.G_1.Recess.MathCompMagtSyst.AcceptedParticipant.AccParticipant;
import com.G_1.Recess.MathCompMagtSyst.AcceptedParticipant.AccParticipantService;
import com.G_1.Recess.MathCompMagtSyst.Participant.Participant;
import com.G_1.Recess.MathCompMagtSyst.Participant.ParticipantHandler;
import com.G_1.Recess.MathCompMagtSyst.Participant.ParticipantService;
import com.G_1.Recess.MathCompMagtSyst.RejectedParticipant.RejParticipant;
import com.G_1.Recess.MathCompMagtSyst.RejectedParticipant.RejParticipantService;
import com.G_1.Recess.MathCompMagtSyst.SchoolRepresentative.SchRepresentative;
import com.G_1.Recess.MathCompMagtSyst.SchoolRepresentative.SchRepresentativeService;
import lombok.RequiredArgsConstructor;
import org.springframework.stereotype.Component;

import javax.swing.text.html.Option;
import java.util.Optional;

@Component
@RequiredArgsConstructor
public class Login {

   private final ParticipantService participantService;
   private final PasswordHashing passwordHashing;
   private final SchRepresentativeService schRepresentativeService;
   private final AccParticipantService accParticipantService;
   private final RejParticipantService rejParticipantService;
   private final ParticipantHandler participantHandler;

   public String login(String[] tokens) {
      if (tokens.length < 3) {
         return "Ops!.. Invalid login format";
      }

      String email = tokens[1];
      String password = tokens[2];

      Optional<Participant> optionalParticipant = participantService.findParticipantByEmail(email);
      Optional<SchRepresentative> optionalSchRepresentative = schRepresentativeService.findSchoolRepresentativeByEmail(email);
      Optional<AccParticipant> optionalAccParticipant = accParticipantService.findAcceptedParticipantByEmail(email);
      Optional<RejParticipant> optionalRejParticipant = rejParticipantService.findRejectedParticipantByEmail(email);

      try {
         if (optionalParticipant.isPresent() && passwordHashing.checkPassword(password, optionalParticipant.get().getPassword())) {
            String currentParticipant = optionalParticipant.get().getFirstName();
            return String.format("Hi Enrolled Participant: %s, you are now logged In.", currentParticipant);
         } else if (optionalSchRepresentative.isPresent() && optionalSchRepresentative.get().getPassword().equals(password)) {
            String currentRepresentative = optionalSchRepresentative.get().getName();
            return String.format("Hi Representative: %s, you are now logged In.", currentRepresentative);
         } else if (optionalAccParticipant.isPresent() && passwordHashing.checkPassword(password, optionalAccParticipant.get().getPassword())) {
            String currentAccParticipant = optionalAccParticipant.get().getFirstName();
            return String.format("Hi Verified Participant: %s, you are now logged In.", currentAccParticipant);
         } else if (optionalRejParticipant.isPresent() && passwordHashing.checkPassword(password, optionalRejParticipant.get().getPassword())) {
            String currentAccParticipant = optionalRejParticipant.get().getFirstName();
            return String.format("Hi Rejected Participant: %s, you were not verified for this year's Mathematics Competition. We advise you to use the web interface and try to apply again next year. Thank you.", currentAccParticipant);
         } else {
            return "Please enter a valid email and password.";
         }
      } catch (Exception e) {
         return "Error: " + e.getMessage();
      }
   }

   public Boolean isAccParticipant(String[] tokens) {
      String email = tokens[1];
      String password = tokens[2];
      Optional<AccParticipant> optionalAccParticipant = accParticipantService.findAcceptedParticipantByEmail(email);
      return optionalAccParticipant.isPresent();
   }

   public Boolean isRepresentative(String[] tokens) {
      String email = tokens[1];
      Optional<SchRepresentative> optionalSchRepresentative = schRepresentativeService.findSchoolRepresentativeByEmail(email);
      return optionalSchRepresentative.isPresent();
   }

   public boolean isRejParticipant(String[] tokens) {
      String email = tokens[1];
      String password = tokens[2];
      Optional<RejParticipant> optionalRejParticipant = rejParticipantService.findRejectedParticipantByEmail(email);
      return optionalRejParticipant.isPresent();
   }

   public boolean isParticipant(String[] tokens) {
      String email = tokens[1];
      String password = tokens[2];
      Optional<Participant> optionalParticipant = participantService.findParticipantByEmail(email);
      return optionalParticipant.isPresent();
   }
}
