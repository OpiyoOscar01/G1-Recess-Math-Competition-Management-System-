package com.G_1.Recess.MathCompMagtSyst.Commons;

import com.G_1.Recess.MathCompMagtSyst.Participant.Participant;
import com.G_1.Recess.MathCompMagtSyst.Participant.ParticipantService;
import lombok.RequiredArgsConstructor;
import org.springframework.stereotype.Component;

import java.util.Optional;

@Component
@RequiredArgsConstructor
public class Login {
private final ParticipantService participantService;
private final PasswordHashing passwordHashing;

public String login(String[] tokens) {
if (tokens.length < 3) {
return "Ops!..Invalid login format";
}
try {
String email = tokens[1];
String password = tokens[2];

Optional<Participant> optionalParticipant = participantService.findParticipantByEmail(email);

if (optionalParticipant.isPresent() && passwordHashing.checkPassword(password, optionalParticipant.get().getPassword())) {
String currentParticipant = optionalParticipant.get().getFirstName();
return String.format("Hi, %s you are now logged.", currentParticipant);
} else {
return "Please enter a valid email and password.";
}
} catch (Exception e) {
return "The correct login format is login-- email password";
}
}
}
