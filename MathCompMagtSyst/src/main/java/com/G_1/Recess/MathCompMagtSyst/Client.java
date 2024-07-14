package com.G_1.Recess.MathCompMagtSyst;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.PrintWriter;
import java.net.Socket;

public class Client {

private static final String SERVER_ADDRESS = "localhost";
private static final int SERVER_PORT = 12345;

public static void main(String[] args) {
try (
        Socket socket = new Socket(SERVER_ADDRESS, SERVER_PORT);
        PrintWriter out = new PrintWriter(socket.getOutputStream(), true);
        BufferedReader in = new BufferedReader(new InputStreamReader(socket.getInputStream()));
        BufferedReader userInput = new BufferedReader(new InputStreamReader(System.in))
) {
System.out.println("Hi, Welcome To The Mathematics Competition Management System.\n Check here for available commands,their parameters and their use.\n(a)General commands.\n1.Login-- email password =To login to your account.\n2.exit ==To quit the system.\n1.(a)Participant Commands.\n1.Register firstname lastename username password email schoolRegistrationNumber ==To register yourself as a participant.\n2.viewChallenges ==To shaow all the available challeges you can attempt.\n3.showQuestions challengeId ==To show all the available questions under a given challenge.\n4.startChallenge challengeId ParticipantId ==To start the challenge timer.\n5.attemptChallenge challenegId partcicpantId ==To attempt seleceted challenege.\n6.submitAnswer challengeId participantId questionNumber answer ==To submit answer for a selected question from a given challenge.\n(b)School Representative commands.\n1.viewApplicants ==To view all enrolled applicants.\n2.viewApplicants:Rejected ==To view all rejected applicants.\n3.viewApplicants:Accepted ==To view all accepted applicants.\n4.confirm yes/no applicantUserName.");

String userInputLine;
while ((userInputLine = userInput.readLine()) != null) {
out.println(userInputLine);
if ("exit".equalsIgnoreCase(userInputLine)) {
break;
}

String serverResponse = in.readLine();
if (serverResponse.toLowerCase().contains("list")) {
handleListResponse(serverResponse, in);
} else {
System.out.println("$-Group-1-Recess-Project-System$ Actively Running... " + serverResponse);
}
}
} catch (IOException e) {
System.out.println("Notice:"+e.getMessage());
}
}

private static void handleListResponse(String firstLine, BufferedReader in) throws IOException {
System.out.println(firstLine);
String listItem;
while ((listItem = in.readLine()) != null && !listItem.isEmpty()) {
System.out.println(listItem);
}
}
}
