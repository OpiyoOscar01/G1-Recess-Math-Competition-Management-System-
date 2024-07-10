import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.PrintWriter;
import java.net.ServerSocket;
import java.net.Socket;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

public class PupilRegistrationServer {
    private static final String DB_URL = "jdbc:mysql://localhost:3306/pupil_competition";
    private static final String DB_USER = "root";
    private static final String DB_PASSWORD = "";
    private static final int PORT = 12345;

    public static void main(String[] args) {
        try {
            // Load driver class
            Class.forName("com.mysql.cj.jdbc.Driver");
            // Obtain a connection
            Connection connection = DriverManager.getConnection(DB_URL, DB_USER, DB_PASSWORD);
            System.out.println("Database connection established.");

            // Start server socket
            try (ServerSocket serverSocket = new ServerSocket(PORT)) {
                System.out.println("Server started on port,application has started " + PORT);

                while (true) {
                    Socket socket = serverSocket.accept();
                    System.out.println("Client connected");

                    new ClientHandler(socket, connection).start();
                }
            } catch (IOException e) {
                e.printStackTrace();
            }
        } catch (ClassNotFoundException | SQLException e) {
            System.err.println("Error: Failed to connect to the database.");
            e.printStackTrace();
        }
    }

    private static class ClientHandler extends Thread {
        private Socket socket;
        private Connection connection;

        public ClientHandler(Socket socket, Connection connection) {
            this.socket = socket;
            this.connection = connection;
        }

        @Override
        public void run() {
            try (BufferedReader in = new BufferedReader(new InputStreamReader(socket.getInputStream()));
                 PrintWriter out = new PrintWriter(socket.getOutputStream(), true)) {

                out.println("Welcome to Pupil Competition Registration!");
                out.println("Available commands: register [username] [password] [firstName] [lastName] [email] [dob] [schoolRegNo], login [username] [password], viewChallenges, attemptChallenge [challengeId]");

                String input;
                while ((input = in.readLine()) != null) {
                    String[] command = input.split(" ");
                    if (command[0].equalsIgnoreCase("register")) {
                        handleRegistration(command, out);
                    } else if (command[0].equalsIgnoreCase("login")) {
                        handleLogin(command, out);
                    } else if (command[0].equalsIgnoreCase("viewChallenges")) {
                        viewChallenges(out);
                    } else if (command[0].equalsIgnoreCase("attemptChallenge")) {
                        if (command.length > 1) {
                            attemptChallenge(command[1], out);
                        } else {
                            out.println("Invalid command. Usage: attemptChallenge [challengeId]");
                        }
                    } else {
                        out.println("Unknown command.");
                    }
                }
            } catch (IOException e) {
                e.printStackTrace();
            }
        }

        private void handleRegistration(String[] command, PrintWriter out) {
            if (command.length < 8) {
                out.println("Invalid command. Usage: register [username] [password] [firstName] [lastName] [email] [dob] [schoolRegNo]");
                return;
            }

            String username = command[1];
            String password = command[2];
            String firstName = command[3];
            String lastName = command[4];
            String email = command[5];
            String dob = command[6];
            String schoolRegNo = command[7];

            String query = "INSERT INTO Participants (username, password, firstName, lastName, email, dateOfBirth, schoolRegistrationNumber) VALUES (?, ?, ?, ?, ?, ?, ?)";
            try (PreparedStatement preparedStatement = connection.prepareStatement(query)) {
                preparedStatement.setString(1, username);
                preparedStatement.setString(2, password);
                preparedStatement.setString(3, firstName);
                preparedStatement.setString(4, lastName);
                preparedStatement.setString(5, email);
                preparedStatement.setDate(6, java.sql.Date.valueOf(dob));
                preparedStatement.setString(7, schoolRegNo);

                int rowsInserted = preparedStatement.executeUpdate();
                if (rowsInserted > 0) {
                    out.println("Registration successful. Please log in now.");
                } else {
                    out.println("Failed to register. Please try again.");
                }
            } catch (SQLException e) {
                e.printStackTrace();
                out.println("Error: Registration failed. Details: " + e.getMessage());
            }
        }
//login handling
        private void handleLogin(String[] command, PrintWriter out) {
            if (command.length < 3) {
                out.println("Invalid command. Usage: login [username] [password]");
                return;
            }

            String username = command[1];
            String password = command[2];

            try {
                if (validateLogin(username, password, "Participants")) {
                    out.println("Login successful. Welcome, " + getFirstName(username, "Participants") + "!");
                    out.println("Enter 'viewChallenges' to see available challenges or 'attemptChallenge [challengeId]' to start a challenge:");
                } else if (validateLogin(username, password, "Representatives")) {
                    out.println("Login successful. Welcome, " + getFirstName(username, "Representatives") + "!");
                    // Add representative dashboard functionalities here
                } else {
                    out.println("Invalid login credentials.");
                }
            } catch (SQLException e) {
                e.printStackTrace();
                out.println("Error: Login failed.");
            }
        }

        private boolean validateLogin(String username, String password, String table) throws SQLException {
            String query = "SELECT * FROM " + table + " WHERE username = ? AND password = ?";
            try (PreparedStatement preparedStatement = connection.prepareStatement(query)) {
                preparedStatement.setString(1, username);
                preparedStatement.setString(2, password);
                ResultSet resultSet = preparedStatement.executeQuery();
                return resultSet.next();
            }
        }

        private String getFirstName(String username, String table) throws SQLException {
            String query = "SELECT firstName FROM " + table + " WHERE username = ?";
            try (PreparedStatement preparedStatement = connection.prepareStatement(query)) {
                preparedStatement.setString(1, username);
                ResultSet resultSet = preparedStatement.executeQuery();
                if (resultSet.next()) {
                    return resultSet.getString("firstName");
                }
            }
            return null;
        }

        private void viewChallenges(PrintWriter out) {
            try {
                String query = "SELECT * FROM Challenges";
                PreparedStatement preparedStatement = connection.prepareStatement(query);
                ResultSet resultSet = preparedStatement.executeQuery();
 
                while (resultSet.next()) {
                    out.println("Challenge ID: " + resultSet.getInt("challengeId") + ", Title: " + resultSet.getString("title") + ", Description: " + resultSet.getString("description") + ", Deadline: " + resultSet.getDate("deadline"));
                }
            } catch (SQLException e) {
                e.printStackTrace();
                out.println("Error: Failed to retrieve challenges.");
            }
        }

        private void attemptChallenge(String challengeId, PrintWriter out) {
            out.println("Challenge started. You have 5 minutes to complete it.");

            // Challenge logic (for simplicity, omitted in this example)
        }
    }
}
