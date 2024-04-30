<?php
// Database connection parameters
$servername = "localhost"; // Change this to your database server name
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "blog"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare SQL statement to insert data into the database
$stmt = $conn->prepare("INSERT INTO message (nom, objet, email, message, numero, date, adresse) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $nom, $objet, $email, $message, $numero, $date, $adresse);

// Set parameters and execute the statement
$nom = $_POST['nom'];
$objet = $_POST['objet'];
$email = $_POST['email'];
$message = $_POST['message'];
$numero = $_POST['numero'];
$date = $_POST['date'];
$adresse = $_POST['adresse']; // Changed from adr to adresse to match the column name in the table
$stmt->execute();

echo "Message submitted successfully.";

// Close statement and database connection
$stmt->close();
$conn->close();
?>
