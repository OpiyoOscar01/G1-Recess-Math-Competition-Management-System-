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
System.out.println("\n\n Hi, you are connected to The Mathematics Competition Management System.\n Type in your Commands below:\n");

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
e.printStackTrace();
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
