package com.G_1.Recess.MathCompMagtSyst.AcceptedParticipant;

import lombok.RequiredArgsConstructor;
import org.springframework.data.domain.Sort;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
@RequiredArgsConstructor
public class AccParticipantService {
private final AccParticipantRepository accParticipantRepository;
public AccParticipant saveAcceptedParticipant(AccParticipant accParticipant){
return accParticipantRepository.save(accParticipant);
}
public List<AccParticipant> findAllAcceptedParicipants(){
return accParticipantRepository.findAll();
}
}
