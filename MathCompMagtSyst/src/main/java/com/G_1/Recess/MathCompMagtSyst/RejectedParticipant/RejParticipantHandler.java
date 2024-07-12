package com.G_1.Recess.MathCompMagtSyst.RejectedParticipant;

import com.G_1.Recess.MathCompMagtSyst.AcceptedParticipant.AccParticipant;
import lombok.RequiredArgsConstructor;
import org.springframework.stereotype.Component;

import java.util.List;

import static java.lang.String.format;

@Component
@RequiredArgsConstructor
public class RejParticipantHandler {
private final RejParticipantService rejParticipantService;

public String getAllRejectedParticipants() {
List<RejParticipant> rejParticipants = rejParticipantService.findAllRejectedParticipants();

if (rejParticipants.isEmpty()) {
return "No rejected Participants  found";
} else {
StringBuilder response = new StringBuilder();
response.append("List of rejected participants:\n");
for (RejParticipant rejparticipant : rejParticipants) {
response.append(format("FirstName: %s, LastName: %s, Username: %s,SchoolRegNumber: %s%n",
        rejparticipant.getFirstName(), rejparticipant.getLastName(), rejparticipant.getUsername(), rejparticipant.getSchool_regNum()));
}
return response.toString();
}
}
}

