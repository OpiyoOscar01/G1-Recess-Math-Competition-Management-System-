package com.G_1.Recess.MathCompMagtSyst.Result;

import org.springframework.stereotype.Service;

@Service
public class ResultService {
private final ResultRepository resultRepository;

public ResultService(ResultRepository resultRepository) {
this.resultRepository = resultRepository;
}

public Result saveParticpantResult(Result result) {
return resultRepository.save(result);
}

public Long countResultsByChallengeIdAndParticipantId(Long challengeId, Long participantId) {
return resultRepository.countByChallengeIdAndParticipantId(challengeId, participantId);
}

public Long sumScoresByChallengeIdAndParticipantId(Long challengeId, Long participantId) {
return resultRepository.sumScoresByChallengeIdAndParticipantId(challengeId, participantId);
}
}