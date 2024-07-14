package com.G_1.Recess.MathCompMagtSyst.ParticipantState;

public interface GetOrCreateParticipantState {
ParticipantState getOrCreateParticipantState(Long participantId, Long challengeId);
void updateParticipantState(ParticipantState participantState);
}

