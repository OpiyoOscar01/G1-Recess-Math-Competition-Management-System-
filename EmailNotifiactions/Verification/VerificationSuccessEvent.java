package com.G_1.Recess.MathCompMagtSyst.EmailNotifiactions.Verification;

import com.G_1.Recess.MathCompMagtSyst.AcceptedParticipant.AccParticipant;
import org.springframework.context.ApplicationEvent;

public class VerificationSuccessEvent extends ApplicationEvent {
   private final AccParticipant accParticipant;

   public VerificationSuccessEvent(AccParticipant accParticipant) {
      super(accParticipant);
      this.accParticipant = accParticipant;
   }

   public AccParticipant getAccParticipant() {
      return accParticipant;
   }
}
