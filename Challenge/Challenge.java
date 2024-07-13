package com.G_1.Recess.MathCompMagtSyst.Challenge;

import com.G_1.Recess.MathCompMagtSyst.Question.Question;
import jakarta.persistence.*;
import lombok.Data;

import java.time.LocalDateTime;
import java.util.List;

@Entity
@Table(name = "challenges")
@Data
public class Challenge {

@Id
@GeneratedValue(strategy = GenerationType.IDENTITY)
@Column(name = "challenge_id")
private Long challengeId;

@Column(name = "opening_date")
private LocalDateTime openingDate;

@Column(name = "participant_start_date")
private LocalDateTime participantStartDate;

@Column(name = "participant_end_date")
private LocalDateTime participantEndDate;

private Long duration;

@Column(name = "closing_date")
private LocalDateTime closingDate;

@Column(name = "number_of_questions")
private Long numberOfQuestions;

@Column(name = "duration_in_minutes")
private Long durationInMinutes;

@Column(name = "duration_in_days")
private Long durationInDays;

@Column(name = "accpart_id")
private Long accpartId;

@Column(name = "number_of_attempts")
private int numberOfAttempts;

@OneToMany(mappedBy = "challenge", fetch = FetchType.LAZY)
private List<Question> questions;

// Constructors, getters, setters, etc.
}
