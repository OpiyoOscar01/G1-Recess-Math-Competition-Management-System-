package com.G_1.Recess.MathCompMagtSyst.Commons;

import org.springframework.mail.MailException;
import org.springframework.mail.SimpleMailMessage;
import org.springframework.mail.javamail.JavaMailSender;
import org.springframework.stereotype.Service;

@Service
public class EmailService {

private final JavaMailSender mailSender;

public EmailService(JavaMailSender mailSender) {
this.mailSender = mailSender;
}

public void sendRegistrationEmail(String to, String subject, String text) {
try {
SimpleMailMessage message = new SimpleMailMessage();
message.setTo(to);
message.setSubject(subject);
message.setText(text);
mailSender.send(message);
} catch (MailException e) {
// Log the exception or handle it appropriately (e.g., throw a custom exception)
throw new RuntimeException("Failed to send email", e);
}
}
}

