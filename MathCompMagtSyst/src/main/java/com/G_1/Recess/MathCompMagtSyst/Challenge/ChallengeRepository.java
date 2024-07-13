package com.G_1.Recess.MathCompMagtSyst.Challenge;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.stereotype.Repository;

import java.util.Optional;

@Repository
public interface ChallengeRepository extends JpaRepository<Challenge, Long> {

@Query("SELECT c FROM Challenge c WHERE c.challengeId = :challengeId")
Optional<Challenge> findByChallengeId(Long challengeId);


}
