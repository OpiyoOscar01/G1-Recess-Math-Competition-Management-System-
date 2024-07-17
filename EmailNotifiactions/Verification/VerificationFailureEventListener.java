package com.G_1.Recess.MathCompMagtSyst.EmailNotifiactions.Verification;

import com.G_1.Recess.MathCompMagtSyst.RejectedParticipant.RejParticipant;
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
public class VerificationFailureEventListener implements ApplicationListener<VerificationFailureEvent> {

   private final JavaMailSender javaMailSender;

   @Override
   public void onApplicationEvent(VerificationFailureEvent event) {
      RejParticipant rejParticipant = event.getRejParticipant();

      if (rejParticipant == null) {
         log.error("VerificationFailureEvent contains null rejParticipant");
         return;
      }

      try {
         sendRejectionEmail(rejParticipant);
      } catch (MessagingException | UnsupportedEncodingException e) {
         log.error("Error sending verification email: {}", e.getMessage());
         throw new RuntimeException(e);
      }
   }

   public void sendRejectionEmail(RejParticipant rejParticipant) throws MessagingException, UnsupportedEncodingException {
      String subject = "Verification Unsuccessful";
      String senderName = "Math Competition Management System";

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
              "<div class='header'>Verification Unsuccessful</div>" +
              "<div class='content'>" +
              "<p>Dear " + rejParticipant.getFirstName() + ",</p>" +
              "<p>We regret to inform you that you were not verified for this year's Mathematics competition following your registration with us.</p>" +
              "<p>We encourage you to try again next year. We appreciate your interest and effort.</p>" +
              "</div>" +
              "<div class='footer'>" +
              "<p>Thank you.<br>The Mathematics Competition Team</p>" +
              "</div>" +
              "</div>" +
              "</body>" +
              "</html>";

      MimeMessage message = javaMailSender.createMimeMessage();
      MimeMessageHelper messageHelper = new MimeMessageHelper(message);

      messageHelper.setFrom("mathcompmagtsystem@gmail.com", senderName);
      messageHelper.setTo(rejParticipant.getEmail());
      messageHelper.setSubject(subject);
      messageHelper.setText(mailContent, true); // true indicates HTML content

      javaMailSender.send(message);
   }
}
