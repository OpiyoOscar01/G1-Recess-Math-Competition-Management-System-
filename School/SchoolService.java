package com.G_1.Recess.MathCompMagtSyst.School;

import com.G_1.Recess.MathCompMagtSyst.Participant.Participant;
import lombok.RequiredArgsConstructor;
import org.springframework.stereotype.Service;

import java.util.List;
import java.util.Optional;

@Service
@RequiredArgsConstructor
public class SchoolService {
private final SchoolRepository schoolRepository;

public Optional<School> findSchoolByRegNum(Long RegNum) {
return schoolRepository.findById(RegNum);
}

public School saveSchool(School school) {
return schoolRepository.save(school);
}

public List<School> getAllRgisteredSchools() {
return schoolRepository.findAll();
}


public School updateSchool(School school) {
return schoolRepository.save(school);
}

public void deleteSchoolByRegNum(Long RegNum) {
schoolRepository.deleteById(RegNum);
}
}
