package com.G_1.Recess.MathCompMagtSyst.RejectedParticipant;

import org.springframework.stereotype.Service;

import java.util.List;
import java.util.Optional;

@Service
public class RejParticipantService {
private final RejParticipantRepository rejParticipantRepository;

public RejParticipantService(RejParticipantRepository rejParticipantRepository) {
this.rejParticipantRepository = rejParticipantRepository;
}

public RejParticipant saveRejectedParticipant(RejParticipant rejParticipant){
return rejParticipantRepository.save(rejParticipant);
}
public List<RejParticipant> findAllRejectedParticipants(){
return rejParticipantRepository.findAll();
}

public Optional<RejParticipant> findRejectedParticipantByEmail(String email){
return rejParticipantRepository.findByEmail(email);
}
}
