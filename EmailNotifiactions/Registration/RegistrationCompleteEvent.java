package com.G_1.Recess.MathCompMagtSyst.EmailNotifiactions.Registration;

import com.G_1.Recess.MathCompMagtSyst.Participant.Participant;
import lombok.Getter;
import lombok.Setter;
import org.springframework.context.ApplicationEvent;

@Setter
@Getter
public class RegistrationCompleteEvent extends ApplicationEvent {

private Participant newParticipant;
public RegistrationCompleteEvent(Participant newParticipant) {
super(newParticipant);
this.newParticipant=newParticipant;
}
}
