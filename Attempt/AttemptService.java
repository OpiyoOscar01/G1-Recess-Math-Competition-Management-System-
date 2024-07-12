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
/*Features added:1.Reject/Accept participants 2.View Challenges 3.startChallenge 4.attemptChallenge 5.submit answers and get results.*/
public void saveAttempt(Attempt attempt) {
attemptRepository.save(attempt);
}

public Attempt findActiveAttempt(Long challengeId, Long participantId) {
List<Attempt> attempts = attemptRepository.findByChallengeIdAndParticipantIdAndEndTimeIsNull(challengeId, participantId);
return attempts.isEmpty() ? null : attempts.get(0);
}
}
