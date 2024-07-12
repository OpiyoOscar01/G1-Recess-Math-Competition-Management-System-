package com.G_1.Recess.MathCompMagtSyst.School;

import com.G_1.Recess.MathCompMagtSyst.Participant.Participant;
import lombok.RequiredArgsConstructor;
import org.springframework.stereotype.Component;
import org.springframework.transaction.support.TransactionSynchronization;
import org.springframework.transaction.support.TransactionSynchronizationManager;

import java.util.List;
import java.util.Optional;

@Component
@RequiredArgsConstructor
public class SchoolHandler {

private final SchoolService schoolService;
public String registerSchool(String[] tokens) {
if (tokens.length < 4) {
return "ERROR: Invalid school registration command format";
}
try {
String schoolRegNumStr = tokens[1];
String name = tokens[2];
String district = tokens[3];
Long schoolRegNum = Long.parseLong(schoolRegNumStr);
Optional<School> existingSchool = schoolService.findSchoolByRegNum(schoolRegNum);
if (existingSchool.isPresent()) {
return "Hey! This School is already registered.";
} else {
School school = new School();
school.setRegNum(schoolRegNum);
school.setName(name);
school.setDistrict(district);
schoolService.saveSchool(school);
return "School successfully Registered.";
}
} catch (Exception e) {
return "ERROR: " + e.getMessage();
}
}
}
