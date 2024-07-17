package com.G_1.Recess.MathCompMagtSyst.RejectedParticipant;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import java.util.Optional;

@Repository
public interface RejParticipantRepository extends JpaRepository<RejParticipant,Long> {
Optional<RejParticipant> findByEmail(String email);
}
