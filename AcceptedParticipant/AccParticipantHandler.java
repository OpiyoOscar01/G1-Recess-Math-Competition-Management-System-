package com.G_1.Recess.MathCompMagtSyst.AcceptedParticipant;

import com.G_1.Recess.MathCompMagtSyst.Commons.EmailService;
import com.G_1.Recess.MathCompMagtSyst.Commons.PasswordHashing;
import com.G_1.Recess.MathCompMagtSyst.EmailNotifiactions.Registration.RegistrationCompleteEvent;
import com.G_1.Recess.MathCompMagtSyst.EmailNotifiactions.Verification.VerificationFailureEvent;
import com.G_1.Recess.MathCompMagtSyst.EmailNotifiactions.Verification.VerificationSuccessEvent;
import com.G_1.Recess.MathCompMagtSyst.Participant.Participant;
import com.G_1.Recess.MathCompMagtSyst.Participant.ParticipantService;
import com.G_1.Recess.MathCompMagtSyst.RejectedParticipant.RejParticipant;
import com.G_1.Recess.MathCompMagtSyst.RejectedParticipant.RejParticipantService;
import lombok.RequiredArgsConstructor;
import org.springframework.context.ApplicationEventPublisher;
import org.springframework.stereotype.Component;

import java.time.LocalDate;
import java.util.List;

import static java.lang.String.format;

@Component
@RequiredArgsConstructor
public class AccParticipantHandler {
   private final ParticipantService participantService;
   private final AccParticipantService accParticipantService;
   private final RejParticipantService rejParticipantService;
   private final ApplicationEventPublisher applicationEventPublisher;

   public String handleVerification(String[] tokens) {
      if (tokens.length < 3) {
         return "ERROR: Invalid verification command format";
      }
      try {
         String confirmationType = tokens[1];
         String username = tokens[2];

         Participant participantToVerify = participantService.findParticpantByUserName(username)
                 .orElseThrow(() -> new RuntimeException(String.format("Participant with the username:%s does not exist.", username)));

         // Prepare participant details for accepted and rejected participants
         String firstname = participantToVerify.getFirstName();
         String lastname = participantToVerify.getLastName();
         String userName = participantToVerify.getUsername();
         String password = participantToVerify.getPassword();
         String image = participantToVerify.getImage();
         String email = participantToVerify.getEmail();
         LocalDate dateOfBirth = participantToVerify.getDate_of_birth();
         Long participantId = participantToVerify.getPart_id();
         Long participantSchoolRegNumber = participantToVerify.getSchool_regNum();

         AccParticipant accParticipant = new AccParticipant();
         accParticipant.setFirstName(firstname);
         accParticipant.setLastName(lastname);
         accParticipant.setUsername(userName);
         accParticipant.setPassword(password);
         accParticipant.setImage(image);
         accParticipant.setDate_of_birth(dateOfBirth);
         accParticipant.setEmail(email);
         accParticipant.setSchool_regNum(participantSchoolRegNumber);

         RejParticipant rejParticipant = new RejParticipant();
         rejParticipant.setFirstName(firstname);
         rejParticipant.setLastName(lastname);
         rejParticipant.setUsername(userName);
         rejParticipant.setPassword(password);
         rejParticipant.setImage(image);
         rejParticipant.setDate_of_birth(dateOfBirth);
         rejParticipant.setEmail(email);
         rejParticipant.setSchool_regNum(participantSchoolRegNumber);

         if (confirmationType.equalsIgnoreCase("yes")) {
            // Save accepted participant and delete from pending list
            accParticipantService.saveAcceptedParticipant(accParticipant);
            participantService.deleteParticipant(participantId);
            // Send a success notification email upon verification
            applicationEventPublisher.publishEvent(new VerificationSuccessEvent(accParticipant));

            return String.format("You have successfully verified %s for the competition.Email notification has been sent to %s.(list)", userName, accParticipant.getEmail());
         } else if (confirmationType.equalsIgnoreCase("no")) {
            // Save rejected participant and delete from pending list
            rejParticipantService.saveRejectedParticipant(rejParticipant);
            participantService.deleteParticipant(participantId);
            // Send a failure notification email upon rejection
            applicationEventPublisher.publishEvent(new VerificationFailureEvent(rejParticipant));
            return String.format("You have successfully rejected %s for the competition. Email notification has been sent to %s.", userName, rejParticipant.getEmail());
         } else {
            return "Usage: confirm yes/no username";
         }
      } catch (NumberFormatException e) {
         return "ERROR: Invalid ID or number format";
      } catch (RuntimeException e) {
         return "ERROR: " + e.getMessage();
      }
   }

   public String getAllAcceptedParticipants() {
      List<AccParticipant> accParticipants = accParticipantService.findAllAcceptedParicipants();

      if (accParticipants.isEmpty()) {
         return "No accepted Participants found";
      } else {
         StringBuilder response = new StringBuilder();
         response.append("List of accepted participants:\n");
         for (AccParticipant accParticipant : accParticipants) {
            response.append(format("FirstName: %s, LastName: %s, Username: %s, SchoolRegNumber: %s%n",
                    accParticipant.getFirstName(), accParticipant.getLastName(), accParticipant.getUsername(), accParticipant.getSchool_regNum()));
         }
         return response.toString();
      }
   }
}
