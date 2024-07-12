package com.G_1.Recess.MathCompMagtSyst.Attempt;

import jakarta.persistence.*;
import lombok.Data;

import java.time.LocalDateTime;

@Entity
@Table(name = "attempts")
@NamedQuery(
        name = "Attempt.findByChallengeIdAndParticipantIdAndEndTimeIsNull",
        query = "SELECT a FROM Attempt a WHERE a.challengeId = :challengeId AND a.accpartId = :participantId AND a.endTime IS NULL"
)
@Data
public class Attempt {
@Id
@GeneratedValue(strategy = GenerationType.IDENTITY)
private Long attemptId;
private int score;
private int numberOfAttempts;
private Long challengeId;
private Long accpartId;
private LocalDateTime startTime;
private LocalDateTime endTime;
}
