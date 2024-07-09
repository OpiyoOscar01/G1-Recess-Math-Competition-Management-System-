package com.G_1.Recess.MathCompMagtSyst.Commons;

import org.mindrot.jbcrypt.BCrypt;
import org.springframework.stereotype.Component;

@Component
public class PasswordHashing {
public  String hashPassword(String plainPassword) {
String hashedPassword = BCrypt.hashpw(plainPassword, BCrypt.gensalt());
return hashedPassword;
}

public  boolean checkPassword(String plainPassword, String hashedPassword) {
return BCrypt.checkpw(plainPassword, hashedPassword);
}


}

