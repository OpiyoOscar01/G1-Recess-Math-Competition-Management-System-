package com.G_1.Recess.MathCompMagtSyst.EmailNotifiactions.Verification;

import com.G_1.Recess.MathCompMagtSyst.AcceptedParticipant.AccParticipant;
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
public class VerificationSuccessEventListener implements ApplicationListener<VerificationSuccessEvent> {

   private final JavaMailSender javaMailSender;

   @Override
   public void onApplicationEvent(VerificationSuccessEvent event) {
      AccParticipant accParticipant = event.getAccParticipant();

      if (accParticipant == null) {
         log.error("VerificationSuccessEvent contains null accParticipant");
         return;
      }

      try {
         sendVerificationEmail(accParticipant);
      } catch (MessagingException | UnsupportedEncodingException e) {
         log.error("Error sending verification email: {}", e.getMessage());
         throw new RuntimeException(e);
      }
   }

   public void sendVerificationEmail(AccParticipant accParticipant) throws MessagingException, UnsupportedEncodingException {
      String subject = "Verification Success.";
      String senderName = "Math Competition Management System.";

      String mailContent = "<!DOCTYPE html>" +
              "<html lang=\"en\">" +
              "<head>" +
              "<meta charset=\"UTF-8\">" +
              "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">" +
              "<title>Verification Success</title>" +
              "<style>" +
              "body {" +
              "  font-family: Arial, sans-serif;" +
              "  line-height: 1.6;" +
              "  color: #333;" +
              "  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);" + // Adding box shadow
              "  border: 1px solid #000;" + // Adding black border
              "}" +
              ".container {" +
              "  padding: 20px;" +
              "  border: 1px solid #e0e0e0;" +
              "  border-radius: 10px;" +
              "  max-width: 600px;" +
              "  margin: 50px auto;" +
              "  background-color: #ffffff;" +
              "  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);" +
              "}" +
              ".header {" +
              "  font-size: 24px;" +
              "  font-weight: bold;" +
              "  margin-bottom: 20px;" +
              "  text-align: center;" +
              "  color: #28a745;" +
              "}" +
              ".content {" +
              "  font-size: 16px;" +
              "}" +
              ".footer {" +
              "  margin-top: 30px;" +
              "  font-size: 14px;" +
              "  text-align: center;" +
              "  color: #777;" +
              "}" +
              ".footer p {" +
              "  margin: 5px 0;" +
              "}" +
              "</style>" +
              "</head>" +
              "<body>" +
              "<div class=\"container\">" +
              "<div class=\"header\">Verification Success</div>" +
              "<div class=\"content\">" +
              "<p>Congratulations, " + accParticipant.getFirstName() + ",</p>" +
              "<p>You were successfully verified for this year's Mathematics competition following your registration with us.</p>" +
              "<p>Start preparing for the competition now. More updates will be shared with you through your email.</p>" +
              "</div>" +
              "<div class=\"footer\">" +
              "<p>Thank you.<br>The Mathematics Competition Team.</p>" +
              "</div>" +
              "</div>" +
              "</body>" +
              "</html>";

      MimeMessage message = javaMailSender.createMimeMessage();
      MimeMessageHelper messageHelper = new MimeMessageHelper(message);

      messageHelper.setFrom("mathcompmagtsystem@gmail.com", senderName);
      messageHelper.setTo(accParticipant.getEmail());
      messageHelper.setSubject(subject);
      messageHelper.setText(mailContent, true); // true indicates HTML content

      javaMailSender.send(message);
   }
}
