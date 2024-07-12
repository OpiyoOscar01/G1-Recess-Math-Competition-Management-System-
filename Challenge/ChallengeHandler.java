package com.G_1.Recess.MathCompMagtSyst.Challenge;

import com.G_1.Recess.MathCompMagtSyst.Attempt.Attempt;
import com.G_1.Recess.MathCompMagtSyst.Attempt.AttemptService;
import com.G_1.Recess.MathCompMagtSyst.Question.Question;
import com.G_1.Recess.MathCompMagtSyst.Question.QuestionService;
import lombok.RequiredArgsConstructor;
import org.springframework.stereotype.Component;

import java.time.LocalDateTime;
import java.util.List;
import java.util.Optional;
import java.util.Random;

import static java.lang.String.format;

@Component
@RequiredArgsConstructor
public class ChallengeHandler {

private final ChallengeRepository challengeRepository;
private final ChallengeService challengeService;
private final QuestionService questionService;
private final AttemptService attemptService;

public String displayAllAvailableChallenges() {
List<Challenge> challenges = challengeService.findAllAvailableChallenges();

if (challenges.isEmpty()) {
return "There are no available challenges";
} else {
StringBuilder response = new StringBuilder();
response.append("List of available challenges:\n");
for (Challenge challenge : challenges) {
response.append(format("Challenge Number: %d, OpeningDate: %s, ClosingDate: %s, Duration: %s, NumberOfQuestions: %d%n",
        challenge.getChallengeId(), challenge.getOpeningDate(), challenge.getClosingDate(), challenge.getDuration(), challenge.getNumberOfQuestions()));
}
return response.toString();
}
}

public String startChallenge(String[] tokens) {
Long challengeId = Long.parseLong(tokens[1]);
Long participantId = Long.parseLong(tokens[2]);
Optional<Challenge> challengeOptional = challengeRepository.findByChallengeId(challengeId);
if (challengeOptional.isEmpty()) {
return "Challenge not found.";
}

Challenge challenge = challengeOptional.get();
if (LocalDateTime.now().isBefore(challenge.getOpeningDate().atStartOfDay()) || LocalDateTime.now().isAfter(challenge.getClosingDate().atStartOfDay())) {
return String.format("Challenge is not currently open. It will open on %s "+challenge.getOpeningDate());
}

Attempt attempt = new Attempt();
attempt.setChallengeId(challengeId);
attempt.setAccpartId(participantId);
attempt.setStartTime(LocalDateTime.now());
attempt.setNumberOfAttempts(0);
attempt.setScore(0);

attemptService.saveAttempt(attempt);

return "Challenge started. Use command attemptChallenge <challengeNumber> to start answering questions.";
}

public String attemptChallenge(String[] tokens) {
Long challengeId = Long.parseLong(tokens[1]);
Long participantId = Long.parseLong(tokens[2]);
Attempt attempt = attemptService.findActiveAttempt(challengeId, participantId);
if (attempt == null) {
return "No active challenge found.";
}

List<Question> questions = questionService.retrieveAllQuestionsUnderAChallenge(challengeId);
if (questions.isEmpty()) {
return "No questions found for this challenge.";
}

Random random = new Random();
Question question = questions.get(random.nextInt(questions.size()));
return format("Question: %s (%d marks). Remaining attempts: %d",
        question.getQuestionText(), question.getMarks(), 3 - attempt.getNumberOfAttempts());
}

public String submitAnswer(String[] tokens) {
Long challengeId = Long.parseLong(tokens[1]);
Long participantId = Long.parseLong(tokens[2]);
Long questionNumber = Long.parseLong(tokens[3]);
String answer = tokens[4];
Attempt attempt = attemptService.findActiveAttempt(challengeId, participantId);
if (attempt == null) {
return "No active challenge found.";
}

Optional<Question> questionOptional = questionService.findExistingQuestionByNumber(questionNumber);
if (questionOptional.isEmpty()) {
return "Question not found.";
}

Question question = questionOptional.get();
attempt.setNumberOfAttempts(attempt.getNumberOfAttempts() + 1);

if (answer.equalsIgnoreCase(question.getCorrectAnswer())) {
attempt.setScore(attempt.getScore() + question.getMarks());
} else if (answer.equals("-")) {
attempt.setScore(attempt.getScore());
} else {
attempt.setScore(attempt.getScore() - 3);
}

attemptService.saveAttempt(attempt);

if (attempt.getNumberOfAttempts() >= 3) {
attempt.setEndTime(LocalDateTime.now());
attemptService.saveAttempt(attempt);
return format("Challenge ended. Your score: %d", attempt.getScore());
}

return format("Current score: %d. Remaining attempts: %d", attempt.getScore(), 3 - attempt.getNumberOfAttempts());
}
}
