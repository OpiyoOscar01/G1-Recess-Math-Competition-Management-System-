package com.G_1.Recess.MathCompMagtSyst.AcceptedParticipant;

import com.G_1.Recess.MathCompMagtSyst.Participant.Participant;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import java.util.Optional;

@Repository
public interface AccParticipantRepository extends JpaRepository<AccParticipant,Long> {

}
