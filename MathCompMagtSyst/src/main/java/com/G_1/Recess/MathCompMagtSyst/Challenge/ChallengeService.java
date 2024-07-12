package com.G_1.Recess.MathCompMagtSyst.Challenge;

import org.springframework.stereotype.Service;

import java.util.List;
import java.util.Optional;

@Service
public class ChallengeService {
private final ChallengeRepository challengeRepository;

public ChallengeService(ChallengeRepository challengeRepository) {
this.challengeRepository = challengeRepository;
}

public List<Challenge> findAllAvailableChallenges(){
return challengeRepository.findAll();
}
public Optional<Challenge> findExistingChallengeByChallengeId(Long challlengeId){
return challengeRepository.findByChallengeId(challlengeId);
}
}
