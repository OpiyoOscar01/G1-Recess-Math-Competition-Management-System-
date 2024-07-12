package com.G_1.Recess.MathCompMagtSyst.Question;

import org.springframework.stereotype.Service;
import java.util.List;

import static java.lang.String.format;

@Service
public class QuestionHandler {

private final QuestionService questionService;

public QuestionHandler(QuestionService questionService) {
this.questionService = questionService;
}

public String displayAllQuestionsUnderAGivenChallenge(String[] tokens) {
if (tokens.length < 2) {
return "Invalid challenge attempt format";
}

try {
Long challengeId = Long.parseLong(tokens[1]);
List<Question> questions = questionService.retrieveAllQuestionsUnderAChallenge(challengeId);

if (questions.isEmpty()) {
return String.format("There are no available questions under the challenge with id: %d", challengeId);
} else {
StringBuilder response = new StringBuilder();
response.append("List of available Questions under this challenge:\n");
for (Question question : questions) {
response.append(format("Qtn Number: %d, Question: %s, (%d marks)%n",
        question.getQtnNo(), question.getQuestionText(), question.getMarks()));
}
return response.toString();
}
} catch (NumberFormatException e) {
return "Error: " + e.getMessage();
} catch (Exception e) {
return "Error: " + e.getMessage();
}
}
}
