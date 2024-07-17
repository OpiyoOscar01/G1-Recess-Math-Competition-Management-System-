package com.G_1.Recess.MathCompMagtSyst.SchoolRepresentative;

import lombok.RequiredArgsConstructor;
import org.springframework.stereotype.Service;

import java.util.Optional;

@Service
@RequiredArgsConstructor
public class SchRepresentativeService {
private final SchRepresentativeRepository schRepresentativeRepository;

public Optional<SchRepresentative> findSchoolRepresentativeByEmail(String email){
return schRepresentativeRepository.findByEmail(email);
}
}
