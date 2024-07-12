package com.G_1.Recess.MathCompMagtSyst.Attempt;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.query.Param;
import org.springframework.stereotype.Repository;

import java.util.List;

@Repository
public interface AttemptRepository extends JpaRepository<Attempt, Long> {
List<Attempt> findByChallengeIdAndParticipantIdAndEndTimeIsNull(Long challengeId, Long participantId);

@Query(name = "Attempt.findByChallengeIdAndParticipantIdAndEndTimeIsNull")
List<Attempt> findActiveAttempts(
        @Param("challengeId") Long challengeId,
        @Param("participantId") Long participantId
);
}
