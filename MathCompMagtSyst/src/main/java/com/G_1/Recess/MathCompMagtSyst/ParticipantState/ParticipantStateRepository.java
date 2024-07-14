package com.G_1.Recess.MathCompMagtSyst.ParticipantState;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

@Repository
public interface ParticipantStateRepository extends JpaRepository<ParticipantState, Long> {
ParticipantState findByParticipantIdAndChallengeId(Long participantId, Long challengeId);
}

