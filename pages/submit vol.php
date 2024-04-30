<?php
// Database connection
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "website";

// Create connection
$conn = new mysqli($servername, $username, $password, $website);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$depart_choice = $_POST['choices'];
$date_aller = $_POST['date_aller'];
$retour_choice = $_POST['choices'];
$date_retour = $_POST['date_retour'];
$region = $_POST['region'];

// Validate form data (optional)

// Insert data into database
$sql = "INSERT INTO vol (depart_choice, date_aller, retour_choice, date_retour, region)
        VALUES ('$depart_choice', '$date_aller', '$retour_choice', '$date_retour', '$region')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>