package com.G_1.Recess.MathCompMagtSyst.RejectedParticipant;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

@Repository
public interface RejParticipantRepository extends JpaRepository<RejParticipant,Long> {
}
