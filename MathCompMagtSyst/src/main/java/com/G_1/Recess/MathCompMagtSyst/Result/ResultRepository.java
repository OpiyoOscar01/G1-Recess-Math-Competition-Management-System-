package com.G_1.Recess.MathCompMagtSyst.Result;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.query.Param;
import org.springframework.stereotype.Repository;

@Repository
public interface ResultRepository extends JpaRepository<Result, Long> {

@Query("SELECT COUNT(r) FROM Result r WHERE r.challengeId = :challengeId AND r.accpartId = :participantId")
Long countByChallengeIdAndParticipantId(@Param("challengeId") Long challengeId, @Param("participantId") Long participantId);

@Query("SELECT SUM(r.score) FROM Result r WHERE r.challengeId = :challengeId AND r.accpartId = :participantId")
Long sumScoresByChallengeIdAndParticipantId(@Param("challengeId") Long challengeId, @Param("participantId") Long participantId);

}





