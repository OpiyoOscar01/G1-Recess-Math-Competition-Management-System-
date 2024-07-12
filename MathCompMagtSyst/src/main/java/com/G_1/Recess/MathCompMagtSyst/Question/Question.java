package com.G_1.Recess.MathCompMagtSyst.Question;

import com.G_1.Recess.MathCompMagtSyst.Challenge.Challenge;
import jakarta.persistence.*;
import lombok.Data;

@Entity
@Table(name = "questions")
@NamedQuery(
        name = "Question.findByChallengeId",
        query = "SELECT q FROM Question q WHERE q.challenge.id = :challengeId"
)
@Data
public class Question {

@Id
@GeneratedValue(strategy = GenerationType.IDENTITY)
@Column(name = "qtn_no")
private Long qtnNo;

@Column(name = "question")
private String questionText;

@Column(name = "marks")
private int marks;

@Column(name = "correct_answer")
private String correctAnswer;

@ManyToOne
@JoinColumn(name = "challenge_id", referencedColumnName = "challenge_id")
private Challenge challenge;
}
