package com.G_1.Recess.MathCompMagtSyst.EmailNotifiactions.Verification;

import com.G_1.Recess.MathCompMagtSyst.RejectedParticipant.RejParticipant;
import org.springframework.context.ApplicationEvent;

public class VerificationFailureEvent extends ApplicationEvent {
   private final RejParticipant rejParticipant;

   public VerificationFailureEvent(RejParticipant rejParticipant) {
      super(rejParticipant);
      this.rejParticipant = rejParticipant;
   }

   public RejParticipant getRejParticipant() {
      return rejParticipant;
   }
}
