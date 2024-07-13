package com.G_1.Recess.MathCompMagtSyst.Result;

import jakarta.persistence.*;
import lombok.Data;

@Entity
@Table(name = "results")
@Data
@NamedQuery(
        name = "Result.countByChallengeIdAndParticipantId",
        query = "SELECT COUNT(r) FROM Result r WHERE r.challengeId = :challengeId AND r.accpartId = :participantId"
)

public class Result {
@Id
@GeneratedValue(strategy = GenerationType.IDENTITY)
private Long result_id;

@Column(name = "accpart_id")
private Long accpartId;

@Column(name = "attempt_id")
private Long attempt_id;

@Column(name = "challenge_id")
private Long challengeId;

private Long score;

}

