package com.G_1.Recess.MathCompMagtSyst.Commons;

import org.springframework.stereotype.Component;
import java.util.Random;

@Component
public class RandomQuestionGenerator {

public Long generateRandomQuestion(Long availableNumberOfQuestions) {
Random random = new Random();

if (availableNumberOfQuestions < 1) {
throw new IllegalArgumentException("Number Of Questions available must be greater than or equal to 1");
}

// Generate random number between 1 and availableNumberOfQuestions (inclusive)
// Casting availableNumberOfQuestions to int because nextInt() takes an int parameter
int randomInt = random.nextInt(availableNumberOfQuestions.intValue()) + 1;
return (long) randomInt; // Cast to long since the method return type is Long
}
}
