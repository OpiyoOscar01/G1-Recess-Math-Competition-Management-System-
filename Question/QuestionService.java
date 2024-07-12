package com.G_1.Recess.MathCompMagtSyst.Question;

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
return questionRepository.findByChallengeId(challengeId);
}

public Optional<Question> findExistingQuestionByNumber(Long questionNumber){
return questionRepository.findByQtnNo(questionNumber);
}

}
