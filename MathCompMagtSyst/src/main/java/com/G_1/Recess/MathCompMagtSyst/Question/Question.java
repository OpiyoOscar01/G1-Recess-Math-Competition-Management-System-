package com.G_1.Recess.MathCompMagtSyst.Question;

import com.G_1.Recess.MathCompMagtSyst.Challenge.Challenge;
import jakarta.persistence.*;
import lombok.Data;

@Entity
@Table(name = "questions")
@NamedQuery(
        name = "Question.countByChallengeId",
        query = "SELECT COUNT(q) FROM Question q WHERE q.challenge.challengeId = :challengeId"
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
private Long marks;

@Column(name = "correct_answer")
private String correctAnswer;

@ManyToOne(fetch = FetchType.LAZY)
@JoinColumn(name = "challenge_id", referencedColumnName = "challenge_id")
private Challenge challenge;

@Column(name = "accpart_id")
private Long participantId;

private String providedAnswer;

// Constructors, getters, setters, etc.
}
