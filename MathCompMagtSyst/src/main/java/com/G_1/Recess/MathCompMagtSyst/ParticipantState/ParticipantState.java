package com.G_1.Recess.MathCompMagtSyst.ParticipantState;

import java.time.LocalDateTime;

import jakarta.persistence.*;
import lombok.Data;

import java.time.LocalDateTime;
@Data

@Entity
@Table(name = "participant_state")
public class ParticipantState {

@Id
@GeneratedValue(strategy = GenerationType.IDENTITY)
private Long id;

@Column(name = "participant_id")
private Long participantId;

@Column(name = "challenge_id")
private Long challengeId;

@Column(name = "current_question_number")
private Long currentQuestionNumber;

@Column(name = "number_of_attempts")
private int numberOfAttempts;

@Column(name = "participant_start_date")
private LocalDateTime participantStartDate;

@Column(name = "participant_end_date")
private LocalDateTime participantEndDate;

public void moveToNextQuestion(Long nextQuestionNumber) {
// Update currentQuestionNumber to the next random question number
this.currentQuestionNumber = nextQuestionNumber;
}


}

