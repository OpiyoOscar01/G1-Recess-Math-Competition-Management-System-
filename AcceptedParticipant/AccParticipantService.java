package com.G_1.Recess.MathCompMagtSyst.AcceptedParticipant;

import com.G_1.Recess.MathCompMagtSyst.Participant.Participant;
import lombok.RequiredArgsConstructor;
import org.springframework.data.domain.Sort;
import org.springframework.stereotype.Service;

import java.util.List;
import java.util.Optional;

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
public Optional<AccParticipant> findAccptedParticipantById(Long acceptedParticipantId){
return accParticipantRepository.findByAccpartId(acceptedParticipantId);
}


public Optional<AccParticipant> findAcceptedParticipantByEmail(String email){
return accParticipantRepository.findByEmail(email);
}
}
