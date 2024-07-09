package com.G_1.Recess.MathCompMagtSyst.Participant;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import java.util.Optional;

@Repository
public interface ParticipantRepository extends JpaRepository<Participant, Long> {
// Query to find participant by email
Optional<Participant> findByEmail(String email);
}
