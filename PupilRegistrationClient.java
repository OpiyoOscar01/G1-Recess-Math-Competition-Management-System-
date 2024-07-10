import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.PrintWriter;
import java.net.Socket;

public class PupilRegistrationClient {
    private static final String SERVER_ADDRESS = "localhost";
    private static final int PORT = 12345;

    public static void main(String[] args) {
        try (Socket socket = new Socket(SERVER_ADDRESS, PORT);
             BufferedReader in = new BufferedReader(new InputStreamReader(socket.getInputStream()));
             PrintWriter out = new PrintWriter(socket.getOutputStream(), true);
             BufferedReader userInput = new BufferedReader(new InputStreamReader(System.in))) {

            // Display server welcome message
            System.out.println(in.readLine());

            // Display available commands
            System.out.println(in.readLine());

            // Read user input command
            String input;
            while ((input = userInput.readLine()) != null) {
                out.println(input); // Send command to server

                // Handle server responses
                String serverResponse;
                while ((serverResponse = in.readLine()) != null) {
                    System.out.println(serverResponse);

                    // Break loop on certain messages to wait for next user command
                    if (serverResponse.contains("successful") || serverResponse.contains("failed") || serverResponse.contains("Unknown")) {
                        break;
                    }
                }
            }

        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}
