package com.G_1.Recess.MathCompMagtSyst.ParticipantState;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import java.time.LocalDateTime;
import java.time.ZoneId;

@Service
public class ParticipantStateServiceImpl implements GetOrCreateParticipantState {

private final ParticipantStateRepository participantStateRepository;

@Autowired
public ParticipantStateServiceImpl(ParticipantStateRepository participantStateRepository) {
this.participantStateRepository = participantStateRepository;
}

@Override
@Transactional
public ParticipantState getOrCreateParticipantState(Long participantId, Long challengeId) {
ParticipantState participantState = participantStateRepository.findByParticipantIdAndChallengeId(participantId, challengeId);
if (participantState == null) {
participantState = new ParticipantState();
participantState.setParticipantId(participantId);
participantState.setChallengeId(challengeId);
participantState.setCurrentQuestionNumber(null);
participantState.setNumberOfAttempts(0);
participantState.setParticipantStartDate(LocalDateTime.now(ZoneId.of("Africa/Nairobi"))); // Set start date
participantStateRepository.save(participantState);
}
return participantState;
}

@Override
@Transactional
public void updateParticipantState(ParticipantState participantState) {
participantStateRepository.save(participantState);
}

}

