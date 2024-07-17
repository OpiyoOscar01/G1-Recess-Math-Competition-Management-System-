package com.G_1.Recess.MathCompMagtSyst.EmailNotifiactions.Registration;

import com.G_1.Recess.MathCompMagtSyst.Participant.Participant;
import jakarta.mail.MessagingException;
import jakarta.mail.internet.MimeMessage;
import lombok.RequiredArgsConstructor;
import lombok.extern.slf4j.Slf4j;
import org.springframework.context.ApplicationListener;
import org.springframework.mail.javamail.JavaMailSender;
import org.springframework.mail.javamail.MimeMessageHelper;
import org.springframework.stereotype.Component;

import java.io.UnsupportedEncodingException;

@Component
@RequiredArgsConstructor
@Slf4j
public class RegistrationCompleteEventListener implements ApplicationListener<RegistrationCompleteEvent> {

   private final JavaMailSender javaMailSender;
   private Participant theNewParticipant;

   @Override
   public void onApplicationEvent(RegistrationCompleteEvent event) {
      // 1. Get the newly registered user from the event
      theNewParticipant = event.getNewParticipant();
      // 2. Send the verification email
      try {
         sendVerificationEmail();
      } catch (MessagingException | UnsupportedEncodingException e) {
         throw new RuntimeException(e);
      }
   }

   public void sendVerificationEmail() throws MessagingException, UnsupportedEncodingException {
      String subject = "Registration Success";
      String senderName = "Math Competition Management System";

      // Email content with dynamic user information and verification URL
      String mailContent = "<html>" +
              "<head>" +
              "<style>" +
              "body {font-family: Arial, sans-serif; line-height: 1.6; color: #333;}" +
              ".container {padding: 20px; border: 1px solid #e0e0e0; border-radius: 10px; max-width: 600px; margin: auto; background-color: #f9f9f9;}" +
              ".header {font-size: 24px; font-weight: bold; margin-bottom: 20px; text-align: center; color: #0066cc;}" +
              ".content {font-size: 16px;}" +
              ".footer {margin-top: 30px; font-size: 14px; text-align: center; color: #777;}" +
              "</style>" +
              "</head>" +
              "<body>" +
              "<div class='container'>" +
              "<div class='header'>Registration Success</div>" +
              "<div class='content'>" +
              "<p>Hi" + theNewParticipant.getFirstName() + ",</p>" +
              "<p>Thank you for registering with us.</p>" +
              "<p>You will be notified after the verification process by your school representative.</p>" +
              "</div>" +
              "<div class='footer'>" +
              "<p>Thank you.<br>The Mathematics Competition Team.</p>" +
              "</div>" +
              "</div>" +
              "</body>" +
              "</html>";

      // Create a MimeMessage to send the email
      MimeMessage message = javaMailSender.createMimeMessage();
      MimeMessageHelper messageHelper = new MimeMessageHelper(message);

      // Set email details: sender, recipient, subject, and content
      messageHelper.setFrom("mathcompmagtsystem@gmail.com", senderName);
      messageHelper.setTo(theNewParticipant.getEmail());
      messageHelper.setSubject(subject);
      messageHelper.setText(mailContent, true); // true indicates HTML content

      // Send the email using the JavaMailSender
      javaMailSender.send(message);
   }
}
