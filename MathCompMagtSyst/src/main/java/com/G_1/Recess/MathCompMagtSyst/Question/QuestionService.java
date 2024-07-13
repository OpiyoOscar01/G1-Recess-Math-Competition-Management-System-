package com.G_1.Recess.MathCompMagtSyst.Question;

import com.fasterxml.jackson.core.PrettyPrinter;
import org.springframework.stereotype.Service;
import java.util.List;
import java.util.Optional;

@Service
public class QuestionService {

private final QuestionRepository questionRepository;

public QuestionService(QuestionRepository questionRepository) {
this.questionRepository = questionRepository;
}

public List<Question> retrieveAllQuestionsUnderAChallenge(Long challengeId) {
return questionRepository.findByChallenge_ChallengeId(challengeId);
}

public Optional<Question> findExistingQuestionByNumber(Long questionNumber){
return questionRepository.findByQtnNo(questionNumber);
}

public Long countTheNumberOFQuestionsUnderAGivenChallege(Long challengeId){
return questionRepository.countByChallengeId(challengeId);
}

public Question saveQuestionInfo(Question question){
return questionRepository.save(question);
}
}
