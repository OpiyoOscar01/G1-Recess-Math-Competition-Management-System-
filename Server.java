package com.G_1.Recess.MathCompMagtSyst;

import com.G_1.Recess.MathCompMagtSyst.AcceptedParticipant.AccParticipantHandler;
import com.G_1.Recess.MathCompMagtSyst.Challenge.ChallengeHandler;
import com.G_1.Recess.MathCompMagtSyst.Participant.ParticipantHandler;
import com.G_1.Recess.MathCompMagtSyst.Commons.Login;
import com.G_1.Recess.MathCompMagtSyst.Question.QuestionHandler;
import com.G_1.Recess.MathCompMagtSyst.RejectedParticipant.RejParticipantHandler;
import com.G_1.Recess.MathCompMagtSyst.School.SchoolHandler;
import lombok.RequiredArgsConstructor;
import org.springframework.boot.CommandLineRunner;
import org.springframework.stereotype.Component;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.PrintWriter;
import java.net.ServerSocket;
import java.net.Socket;
import java.util.concurrent.ConcurrentHashMap;
import java.util.concurrent.ExecutorService;
import java.util.concurrent.Executors;

@Component
public class Server implements CommandLineRunner {

private static final int PORT = 12345; // Port number for the server
private final ParticipantHandler participantHandler;
private final Login login;
private final ConcurrentHashMap<Socket, Boolean> clientLoginStatus;
private final ExecutorService threadPool; // Thread pool for handling client connections
private final SchoolHandler schoolHandler;
private final AccParticipantHandler accParticipantHandler;
private final RejParticipantHandler rejParticipantHandler;
private final ChallengeHandler challengeHandler;
private final QuestionHandler questionHandler;

public Server(ParticipantHandler participantHandler, Login login, SchoolHandler schoolHandler, AccParticipantHandler accParticipantHandler, RejParticipantHandler rejParticipantHandler, ChallengeHandler challengeHandler, QuestionHandler questionHandler) {
this.participantHandler = participantHandler;
this.login = login;
this.schoolHandler = schoolHandler;
this.accParticipantHandler = accParticipantHandler;
this.rejParticipantHandler = rejParticipantHandler;
this.challengeHandler = challengeHandler;
this.questionHandler = questionHandler;
this.clientLoginStatus = new ConcurrentHashMap<>();
this.threadPool = Executors.newFixedThreadPool(10); // Create a thread pool with a fixed number of threads
}

@Override
public void run(String... args) throws Exception {
try (ServerSocket serverSocket = new ServerSocket(PORT)) {
System.out.println("Server started. Listening on port " + PORT);

while (true) {
Socket clientSocket = serverSocket.accept(); // Accept new client connection
System.out.println("New client connected: " + clientSocket);

clientLoginStatus.put(clientSocket, false); // Initialize client login status as false
threadPool.submit(() -> handleClient(clientSocket)); // Submit the client handling task to the thread pool
}
} catch (IOException e) {
e.printStackTrace();
}
}

private void handleClient(Socket clientSocket) {
try (
        PrintWriter out = new PrintWriter(clientSocket.getOutputStream(), true);
        BufferedReader in = new BufferedReader(new InputStreamReader(clientSocket.getInputStream()))
) {
String inputLine;

while ((inputLine = in.readLine()) != null) {
System.out.println("Received command from client: " + inputLine);
String response = processCommand(clientSocket, inputLine); // Process the command
out.println(response);

if ("exit".equalsIgnoreCase(inputLine)) {
response = "Thank you for participating in this year's maths competition.";
out.println(response);
break; // Exit the loop and close the connection
}
}
} catch (IOException e) {
e.printStackTrace();
} finally {
clientLoginStatus.remove(clientSocket); // Remove client login status on disconnect
try {
clientSocket.close(); // Close the client socket
} catch (IOException e) {
e.printStackTrace();
}
}
}

private String processCommand(Socket clientSocket, String command) {
String[] tokens = command.split("\\s+");
String commandType = tokens[0];

Boolean isLoggedIn = clientLoginStatus.get(clientSocket); // Check if the client is logged in
if (isLoggedIn == null || (!isLoggedIn && !commandType.equalsIgnoreCase("Login--") && !commandType.equalsIgnoreCase("Register"))) {
return "ERROR: You must login first using the 'login--' command.";
}

switch (commandType) {
case "Register":
return participantHandler.registerParticipant(tokens);
case "update":
return participantHandler.updateParticipant(tokens);

// Handle login
case "Login--":
String loginResponse = login.login(tokens);
if (loginResponse.contains("Hi")) {
clientLoginStatus.put(clientSocket, true); // Update login status
}
return loginResponse;
case "Delete":
if (isLoggedIn) {
return participantHandler.deleteParticipant(tokens);
} else {
return "ERROR: You must login first using the 'login--' command.";
}
case "confirm":
if (isLoggedIn) {
return accParticipantHandler.handleVerification(tokens);
} else {
return "ERROR: You must login first using the 'login--' command.";
}
case "viewApplicants":
if (isLoggedIn) {
return participantHandler.getAllParticipants();
} else {
return "ERROR: You must login first using the 'login--' command.";
}
case "viewApplicants:Accepted":
if (isLoggedIn) {
return accParticipantHandler.getAllAcceptedParticipants();
} else {
return "ERROR: You must login first using the 'login--' command.";
}

case "viewApplicants:Rejected":
if (isLoggedIn) {
return rejParticipantHandler.getAllRejectedParticipants();
} else {
return "ERROR: You must login first using the 'login--' command.";
}

case "viewChallenges":
if (isLoggedIn) {
return challengeHandler.displayAllAvailableChallenges();
} else {
return "ERROR: You must login first using the 'login--' command.";
}

case "showQuestions:":
if (isLoggedIn) {
return questionHandler.displayAllQuestionsUnderAGivenChallenge(tokens);
} else {
return "ERROR: You must login first using the 'login--' command.";
}

case "startChallenge":
if (isLoggedIn) {
return challengeHandler.startChallenge(tokens);
} else {
return "ERROR: You must login first using the 'login--' command.";
}

case "attemptChallenge":
if (isLoggedIn) {
return challengeHandler.attemptChallenge1(tokens);
} else {
return "ERROR: You must login first using the 'login--' command.";
}

case "submitAnswer":
if (isLoggedIn) {
return challengeHandler.submitAnswer1(tokens);
} else {
return "ERROR: You must login first using the 'login--' command.";
}

case "register:school":
if (isLoggedIn) {
return schoolHandler.registerSchool(tokens);
} else {
return "ERROR: You must login first using the 'login--' command.";
}

default:
return "Incorrect command! Check here for list of available commands,their parameters and their use.\n(a)General commands.\n.Login-- email password =To login to your account.\n2.exit ==To quit the system.\n1.(a)Participant Commands.\n1.Register firstname lastename username  password email schoolRegistrationNumber ==To register yourself as a participant.\n2.viewChallenges ==To shaow all the available challeges you can attempt.\n3.showQuestions: challengeId ==To show all the available questions under a given challenge.\n4.startChallenge challengeId ParticipantId ==To start the challenge timer.\n5.attemptChallenge challenegId partcicpantId ==To attempt seleceted challenege.\n6.submitAnswer challengeId participantId questionNumber answer ==To submit answer for a selected question from a given challenge.\n(b)School Representative commands.\n1.viewApplicants ==To view all enrolled applicants.\n2.viewApplicants:Rejected ==To view all rejected applicants.\n3.viewApplicants:Accepted ==To view all accepted applicants.\n4.confirm yes/no applicantUserName.\n";
}
}
}
