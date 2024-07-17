package com.G_1.Recess.MathCompMagtSyst.SchoolRepresentative;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import java.util.Optional;

@Repository
public interface SchRepresentativeRepository extends JpaRepository<SchRepresentative,Long> {
Optional<SchRepresentative> findByEmail(String email);
}
