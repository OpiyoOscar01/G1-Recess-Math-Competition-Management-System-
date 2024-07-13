package com.G_1.Recess.MathCompMagtSyst.Challenge;

import com.G_1.Recess.MathCompMagtSyst.AcceptedParticipant.AccParticipant;
import com.G_1.Recess.MathCompMagtSyst.AcceptedParticipant.AccParticipantService;
import com.G_1.Recess.MathCompMagtSyst.Attempt.Attempt;
import com.G_1.Recess.MathCompMagtSyst.Attempt.AttemptService;
import com.G_1.Recess.MathCompMagtSyst.Commons.ComputeTimeInterval;
import com.G_1.Recess.MathCompMagtSyst.Commons.RandomQuestionGenerator;
import com.G_1.Recess.MathCompMagtSyst.Question.Question;
import com.G_1.Recess.MathCompMagtSyst.Question.QuestionService;
import com.G_1.Recess.MathCompMagtSyst.Result.Result;
import com.G_1.Recess.MathCompMagtSyst.Result.ResultService;
import lombok.RequiredArgsConstructor;
import org.springframework.stereotype.Component;

import java.time.LocalDate;
import java.time.LocalDateTime;
import java.time.ZoneId;
import java.time.temporal.ChronoUnit;
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
private final AccParticipantService accParticipantService;
private final ComputeTimeInterval computeTimeInterval;
private  final RandomQuestionGenerator randomQuestionGenerator;
private final ResultService resultService;
LocalDateTime now=LocalDateTime.now(ZoneId.of("Africa/Nairobi"));

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

public String startChallengef(String[] tokens) {
Long challengeId = Long.parseLong(tokens[1]);
Long participantId = Long.parseLong(tokens[2]);
Optional<Challenge> challengeOptional = challengeRepository.findByChallengeId(challengeId);
if (challengeOptional.isEmpty()) {
return "Challenge not found.";
}
Optional<AccParticipant> optionalAccParticipant=accParticipantService.findAccptedParticipantById(participantId);
if(optionalAccParticipant.isEmpty()){
return "You are not among the qualified participants for this competition.Contact your school for more info.";
}

Challenge challenge = challengeOptional.get();

if(LocalDateTime.now().isBefore(challenge.getOpeningDate())){
return "It's too early for you to open the challenge.This challenge will open on "+challenge.getOpeningDate()+" which is "+computeTimeInterval.calculateDurationInDays(LocalDateTime.now(ZoneId.of("Africa/Nirobi")),challenge.getOpeningDate())+" days from now.";
} else if (LocalDateTime.now().isAfter(challenge.getClosingDate())) {
return "You are too late for the challenge.It got closed on "+challenge.getClosingDate()+" which is "+ computeTimeInterval.calculateDurationInDays(LocalDateTime.now(ZoneId.of("Africa/Nairobi")),challenge.getClosingDate())+" days ago.";
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

public String startChallenge(String[] tokens){
Long challengeId = Long.parseLong(tokens[1]);
Long participantId = Long.parseLong(tokens[2]);

Optional<Challenge> challengeOptional = challengeRepository.findByChallengeId(challengeId);
if (challengeOptional.isEmpty()) {
return "Challenge not found.";
}
Optional<AccParticipant> optionalAccParticipant=accParticipantService.findAccptedParticipantById(participantId);
if(optionalAccParticipant.isEmpty()){
return "You are not among the qualified participants for this competition.Contact your school for more info.";
}

Challenge challenge = challengeOptional.get();

if(LocalDateTime.now().isBefore(challenge.getOpeningDate())){
return "It's too early for you to open the challenge.This challenge will open on "+challenge.getOpeningDate()+" which is "+computeTimeInterval.calculateDurationInDays(now,challenge.getOpeningDate())+" days from now.";
} else if (LocalDateTime.now().isAfter(challenge.getClosingDate())) {
return "You are too late for the challenge.It got closed on "+challenge.getClosingDate()+" which is "+ computeTimeInterval.calculateDurationInDays(now,challenge.getClosingDate())+" days ago.";
}
Challenge c= new Challenge();
c.setAccpartId(participantId);
c.setNumberOfAttempts(0);
c.setParticipantStartDate(now);
c.setDurationInMinutes(computeTimeInterval.calculateDurationInMinutes(now,c.getClosingDate()));
c.setDurationInDays(computeTimeInterval.calculateDurationInDays(now,c.getClosingDate()));
c.setChallengeId(challengeId);
challengeService.saveChallengeInfo(c);
return "Challenge started. Use command attemptChallenge <challengeNumber> to start answering questions.";
}

public String attemptChallengef(String[] tokens) {
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
public String attemptChallenge(String[] tokens) {
Long challengeId = Long.parseLong(tokens[1]);
Long participantId = Long.parseLong(tokens[2]);

Optional<Challenge> optionalChallenge=challengeService.findExistingChallengeByChallengeId(challengeId);

List<Question> questions = questionService.retrieveAllQuestionsUnderAChallenge(challengeId);
if (questions.isEmpty()) {
return "No questions found for this challenge.We advise you to attempt another challenge.";
}else {
Challenge challenge=new Challenge();
challenge.setAccpartId(participantId);
challengeService.saveChallengeInfo(challenge);
}

Long questionNumber= randomQuestionGenerator.generateRandomQuestion(questionService.countTheNumberOFQuestionsUnderAGivenChallege(challengeId));
Optional<Question> optionalQuestion=questionService.findExistingQuestionByNumber(questionNumber);
if(optionalQuestion.isEmpty()){
return "No Question found for this challenge.";
} else{
return String.format("Time Left: %d,Time Taken: %d.\nQtnNumber %d: %s (%d marks)",optionalChallenge.get().getDurationInMinutes(),computeTimeInterval.calculateDurationInMinutes(optionalChallenge.get().getParticipantStartDate(),now),optionalQuestion.get().getQtnNo(),
        optionalQuestion.get().getQuestionText(), optionalQuestion.get().getMarks());}
}

public String submitAnswer(String[] tokens) {
Long challengeId = Long.parseLong(tokens[1]);
Long participantId = Long.parseLong(tokens[2]);
Long questionNumber = Long.parseLong(tokens[3]);
String answer = tokens[4];


Optional<Question> questionOptional = questionService.findExistingQuestionByNumber(questionNumber);
if (questionOptional.isEmpty()) {
return "Question not found.";
}


Optional<AccParticipant> optionalAccParticipant=accParticipantService.findAccptedParticipantById(participantId);

if(optionalAccParticipant.isEmpty()){
return "You are not among the qualified participants for this competition.Contact your school for more info.";
}

Optional<Challenge> challengeOptional=challengeService.findExistingChallengeByChallengeId(challengeId);
Challenge challenge = challengeOptional.get();


if(LocalDateTime.now().isBefore(challenge.getOpeningDate())){
return "It's too early for you to open the challenge.This challenge will open on "+challenge.getOpeningDate()+" which is "+computeTimeInterval.calculateDurationInDays(now,challenge.getOpeningDate())+" days from now.";
} else if (LocalDateTime.now().isAfter(challenge.getClosingDate())) {
return "You are too late for the challenge.It got closed on "+challenge.getClosingDate()+" which is "+ computeTimeInterval.calculateDurationInDays(now,challenge.getClosingDate())+" days ago.";
}
Question question = questionOptional.get();
Result participantResult=new Result();
if (answer.equalsIgnoreCase(question.getCorrectAnswer())) {
participantResult.setScore(question.getMarks());
} else if (answer.equals("-")) {
participantResult.setScore(question.getMarks()-3);
} else {
participantResult.setScore(question.getMarks() - 6);
}
participantResult.setAccpartId(participantId);
participantResult.setChallengeId(challengeId);
Long numberOfResults=(resultService.countResultsByChallengeIdAndParticipantId(challengeId,participantId));
int intResult=numberOfResults.intValue();
//Save participant result per question
resultService.saveParticpantResult(participantResult);

int finalScore=resultService.sumScoresByChallengeIdAndParticipantId(challengeId,participantId).intValue();
int limit = 30;
int counter = 0;

for (int i = 1; i <= limit; i++) {
if (i % 10 == 0) {

challenge.setNumberOfAttempts(counter++);
}
}

if (challenge.getNumberOfAttempts() >= 3) {
challenge.setParticipantEndDate(now);
resultService.saveParticpantResult(participantResult);
return format("Challenge ended. Your score: %d",finalScore);
}

return format("Current score: %d.",finalScore);
}
}
