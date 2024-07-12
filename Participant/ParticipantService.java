package com.G_1.Recess.MathCompMagtSyst.Participant;

import jakarta.transaction.Transactional;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;
import java.util.Optional;

@Service
public class ParticipantService {

private final ParticipantRepository participantRepository;

@Autowired
public ParticipantService(ParticipantRepository participantRepository) {
this.participantRepository = participantRepository;
}


public Participant saveParticipant(Participant participant) {
return participantRepository.save(participant);
}

public List<Participant> getAllParticipants() {
return participantRepository.findAll();
}

public Optional<Participant> getParticipantById(Long id) {
return participantRepository.findById(id);
}

public Participant updateParticipant(Participant participant) {
return participantRepository.save(participant);
}

public void deleteParticipant(Long id) {
participantRepository.deleteById(id);
}


public Optional<Participant> findParticipantByEmail(String email){
return participantRepository.findByEmail(email);
}

public Optional<Participant> findParticpantByUserName(String username){
return  participantRepository.findByUsername(username);
}
}
