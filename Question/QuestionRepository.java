package com.G_1.Recess.MathCompMagtSyst.Question;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.query.Param;
import org.springframework.stereotype.Repository;

import java.util.List;
import java.util.Optional;

@Repository
public interface QuestionRepository extends JpaRepository<Question, Long> {

List<Question> findByChallenge_ChallengeId(@Param("challengeId") Long challengeId);

Optional<Question> findByQtnNo(Long questionNumber);

@Query(name = "Question.countByChallengeId")
Long countByChallengeId(@Param("challengeId") Long challengeId);
}
