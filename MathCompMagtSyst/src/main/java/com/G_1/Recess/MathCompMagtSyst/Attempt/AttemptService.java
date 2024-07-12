package com.G_1.Recess.MathCompMagtSyst.Attempt;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
public class AttemptService {
private final AttemptRepository attemptRepository;

@Autowired
public AttemptService(AttemptRepository attemptRepository) {
this.attemptRepository = attemptRepository;
}

public void saveAttempt(Attempt attempt) {
attemptRepository.save(attempt);
}

public Attempt findActiveAttempt(Long challengeId, Long participantId) {
List<Attempt> attempts = attemptRepository.findByChallengeIdAndParticipantIdAndEndTimeIsNull(challengeId, participantId);
return attempts.isEmpty() ? null : attempts.get(0);
}
}
