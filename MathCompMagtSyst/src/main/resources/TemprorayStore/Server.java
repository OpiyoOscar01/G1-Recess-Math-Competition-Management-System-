//package com.G_1.Recess.MathCompMagtSyst.Participant;
//import com.G_1.Recess.MathCompMagtSyst.Commons.EmailService;
//import org.springframework.beans.factory.annotation.Autowired;
//import org.springframework.boot.CommandLineRunner;
//import org.springframework.stereotype.Component;
//
//import java.io.BufferedReader;
//import java.io.IOException;
//import java.io.InputStreamReader;
//import java.io.PrintWriter;
//import java.net.ServerSocket;
//import java.net.Socket;
//import java.util.List;
//import java.lang.String;
//
//
//import static java.lang.String.format;
//
//@Component
//public class Server implements CommandLineRunner {
//
//private static final int PORT = 12345;
//private final ParticipantService participantService;
//private final EmailService emailService;
//
//public Server(ParticipantService participantService, EmailService emailService) {
//this.participantService = participantService;
//this.emailService = emailService;
//}
//
//public void run(String... args) throws Exception {
//try (ServerSocket serverSocket = new ServerSocket(PORT)) {
//System.out.println("Server started. Listening on port " + PORT);
//
//while (true) {
//Socket clientSocket = serverSocket.accept();
//System.out.println("New client connected: " + clientSocket);
//
//handleClient(clientSocket);
//}
//} catch (IOException e) {
//e.printStackTrace();
//}
//}
//
//private void handleClient(Socket clientSocket) {
//try (
//        PrintWriter out = new PrintWriter(clientSocket.getOutputStream(), true);
//        BufferedReader in = new BufferedReader(new InputStreamReader(clientSocket.getInputStream()))
//) {
//String inputLine;
//
//while ((inputLine = in.readLine()) != null) {
//System.out.println("Received command from client: " + inputLine);
//String response = processCommand(inputLine);
//out.println(response);
//
//if ("exit".equalsIgnoreCase(inputLine)) {
//break;
//}
//}
//} catch (IOException e) {
//e.printStackTrace();
//}
//}
//private String processCommand(String command) {
//String[] tokens = command.split("\\s+");
//String commandType = tokens[0];
//
//switch (commandType.toLowerCase()) {
//case "register":
//return registerParticipant(tokens);
//
//case "update":
//return updateParticipant(tokens);
//case "delete":
//return deleteParticipant(tokens);
//case "get":
//return getAllParticipants();
//default:
//return "ERROR: Unknown command";
//}
//}
//
//private String registerParticipant(String[] tokens) {
//if (tokens.length < 6) {
//return "ERROR: Invalid register command format";
//}
//try {
//String firstname = tokens[1];
//String lastname = tokens[2];
//String username = tokens[3];
//String password = tokens[4];
//String email = tokens[5];
//
//Participant newParticipant = new Participant();
//newParticipant.setFirstName(firstname);
//newParticipant.setLastName(lastname);
//newParticipant.setUsername(username);
//newParticipant.setEmail(email);
//newParticipant.setPassword(password);
//
//participantService.saveParticipant(newParticipant);
//
////String subject = "Welcome to our this year's Math Competition";
////String text = String.format("Dear %s,\nThank you for registering.\nMath Competition Management System.", firstname);
////emailService.sendRegistrationEmail(email, subject, text);
//
//return "Registration successful";
//} catch (Exception e) {
//return "ERROR: "+e.getMessage();
//}
//}
//
//
//private String updateParticipant(String[] tokens) {
//if (tokens.length < 7) {
//return "ERROR: Invalid update command format";
//}
//try {
//Long id = Long.parseLong(tokens[1]);
//String firstname = tokens[2];
//String lastname = tokens[3];
//String username = tokens[4];
//String password = tokens[5];
//String email = tokens[6];;
//
//// Retrieve the participant from database, update its attribute values, and save it
//Participant participantToUpdate = participantService.getParticicpantById(id)
//        .orElseThrow(() -> new RuntimeException("Participant not found"));
//
//participantToUpdate.setFirstName(firstname);
//participantToUpdate.setLastName(lastname);
//participantToUpdate.setUsername(username);
//participantToUpdate.setEmail(email);
//participantToUpdate.setPassword(password);
//participantService.updatePaticipant(participantToUpdate);
//return "Participant Succesfully Updated";
//} catch (NumberFormatException e) {
//return "ERROR: Invalid ID or number format";
//} catch (RuntimeException e) {
//return "ERROR: " + e.getMessage();
//}
//}
//
//private String deleteParticipant(String[] tokens) {
//if (tokens.length < 2) {
//return "ERROR: Invalid delete command format";
//}
//try {
//Long id = Long.parseLong(tokens[1]);
//participantService.deleteParticipant(id);
//return "Participant successfully deleted";
//} catch (NumberFormatException e) {
//return "ERROR: Invalid ID format";
//} catch (Exception e) {
//return "ERROR: " + e.getMessage();
//}
//}
//
//private String getAllParticipants() {
//List<Participant> participants = participantService.getAllParticipants();
//
//if (participants.isEmpty()) {
//return "No participants found";
//} else {
//StringBuilder response = new StringBuilder();
//response.append("List of participants:\n");
//for (Participant participant : participants) {
//response.append(format("ID: %d, FirstName: %s, LastName: %s, Username: %s, Email: %s%n",
//        participant.getId(), participant.getFirstName(), participant.getLastName(),participant.getUsername(),participant.getEmail()));
//}
//return response.toString();
//}
//}
//}
//
