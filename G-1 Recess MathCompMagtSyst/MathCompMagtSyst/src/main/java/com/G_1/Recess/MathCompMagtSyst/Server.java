package com.G_1.Recess.MathCompMagtSyst;

import com.G_1.Recess.MathCompMagtSyst.Participant.ParticipantHandler;
import com.G_1.Recess.MathCompMagtSyst.Commons.Login;
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
private final ConcurrentHashMap<Socket, Boolean> clientLoginStatus; // Thread-safe map to track login status of clients
private final ExecutorService threadPool; // Thread pool for handling client connections

public Server(ParticipantHandler participantHandler, Login login) {
this.participantHandler = participantHandler;
this.login = login;
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
if (isLoggedIn == null || (!isLoggedIn && !commandType.equalsIgnoreCase("login--") && !commandType.equalsIgnoreCase("register"))) {
return "ERROR: You must login first using the 'login--' command.";
}

switch (commandType.toLowerCase()) {
case "register":
return participantHandler.registerParticipant(tokens); // Handle registration
case "update":
return participantHandler.updateParticipant(tokens); // Handle participant update
case "login--":
String loginResponse = login.login(tokens); // Handle login
if (loginResponse.contains("Hi")) {
clientLoginStatus.put(clientSocket, true); // Update login status
}
return loginResponse;
case "delete":
if (isLoggedIn) {
return participantHandler.deleteParticipant(tokens); // Handle participant deletion
} else {
return "ERROR: You must login first using the 'login--' command.";
}
case "get":
if (isLoggedIn) {
return participantHandler.getAllParticipants(); // Handle fetching all participants
} else {
return "ERROR: You must login first using the 'login--' command.";
}
default:
return "ERROR: Unknown command"; // Handle unknown command
}
}
}
