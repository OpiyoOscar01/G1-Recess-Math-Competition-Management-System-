package com.G_1.Recess.MathCompMagtSyst.Participant;

import com.G_1.Recess.MathCompMagtSyst.AcceptedParticipant.AccParticipantService;
import com.G_1.Recess.MathCompMagtSyst.Commons.EmailService;
import com.G_1.Recess.MathCompMagtSyst.Commons.PasswordHashing;
import com.G_1.Recess.MathCompMagtSyst.RejectedParticipant.RejParticipantService;
import com.G_1.Recess.MathCompMagtSyst.School.School;
import com.G_1.Recess.MathCompMagtSyst.School.SchoolService;
import com.G_1.Recess.MathCompMagtSyst.EmailNotifiactions.Registration.RegistrationCompleteEvent;
import jakarta.transaction.Transactional;
import lombok.RequiredArgsConstructor;
import org.springframework.context.ApplicationEventPublisher;
import org.springframework.stereotype.Component;

import java.util.Optional;
import java.util.List;

import static java.lang.String.format;

@Component
@RequiredArgsConstructor
public class ParticipantHandler {

private final ParticipantService participantService;
private final EmailService emailService;
private final PasswordHashing passwordHashing;
private final SchoolService schoolService;
private final AccParticipantService accParticipantService;
private final RejParticipantService rejParticipantService;
private final ApplicationEventPublisher applicationEventPublisher;

@Transactional
public String registerParticipant(String[] tokens) {
if (tokens.length < 7) {
return "ERROR: Invalid register command format";
}
try {
String firstname = tokens[1];
String lastname = tokens[2];
String username = tokens[3];
String password = passwordHashing.hashPassword(tokens[4]);
String email = tokens[5];
String schoolRegNumStr = tokens[6];
Long schoolRegNum = Long.parseLong(schoolRegNumStr);
Optional<Participant> existingUser = participantService.findParticipantByEmail(email);
Optional<School> existingSchool = schoolService.findSchoolByRegNum(schoolRegNum);

if (existingSchool.isEmpty()) {
return "Hello, the school with the provided Registration number does not exist.";
}

if (existingUser.isPresent()) {
return "Hey! This email has already been taken.";
} else {
Participant newParticipant = new Participant();
newParticipant.setFirstName(firstname);
newParticipant.setLastName(lastname);
newParticipant.setUsername(username);
newParticipant.setEmail(email);
newParticipant.setPassword(password);
newParticipant.setSchool_regNum(schoolRegNum);
participantService.saveParticipant(newParticipant);

//Publish a registration event after saving the particicpant data to the database.
applicationEventPublisher.publishEvent(new RegistrationCompleteEvent(newParticipant));
return String.format("You have been successfully Registered.\nA Notification message has been sent to your email (%s)",newParticipant.getEmail());
}
} catch (Exception e) {
return "ERROR: " + e.getMessage();
}
}

public String updateParticipant(String[] tokens) {
if (tokens.length < 7) {
return "ERROR: Invalid update command format";
}
try {
Long id = Long.parseLong(tokens[1]);
String firstname = tokens[2];
String lastname = tokens[3];
String username = tokens[4];
String password = tokens[5];
String email = tokens[6];

Participant participantToUpdate = participantService.getParticipantById(id)
        .orElseThrow(() -> new RuntimeException("Participant not found"));

participantToUpdate.setFirstName(firstname);
participantToUpdate.setLastName(lastname);
participantToUpdate.setUsername(username);
participantToUpdate.setEmail(email);
participantToUpdate.setPassword(password);
participantService.updateParticipant(participantToUpdate);

return "Participant successfully updated";
} catch (NumberFormatException e) {
return "ERROR: Invalid ID or number format";
} catch (RuntimeException e) {
return "ERROR: " + e.getMessage();
}
}

public String deleteParticipant(String[] tokens) {
if (tokens.length < 2) {
return "ERROR: Invalid delete command format";
}
try {
Long id = Long.parseLong(tokens[1]);
participantService.deleteParticipant(id);
return "Participant successfully deleted";
} catch (NumberFormatException e) {
return "ERROR: Invalid ID format";
} catch (Exception e) {
return "ERROR: " + e.getMessage();
}
}

public String getAllParticipants() {
List<Participant> participants = participantService.getAllParticipants();

if (participants.isEmpty()) {
return "No participants found";
} else {
StringBuilder response = new StringBuilder();
response.append("List of participants:\n");
for (Participant participant : participants) {
response.append(format("FirstName: %s, LastName: %s, Username: %s, SchoolId: %s, Email: %s%n",
        participant.getFirstName(), participant.getLastName(), participant.getUsername(), participant.getSchool_regNum(), participant.getEmail()));
}
return response.toString();
}
}
}
