<?php
// Database connection details
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = "password"; // Replace with your database password
$database = "website"; // Replace with your database name

// Establish connection
$connect = new mysqli($servername, $username, $password, $database);
// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

// Check if form is submitted using POST method
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $depart = isset($_POST['choices_depart']) ? $_POST['choices_depart'] : '';
    $date_aller = isset($_POST['date_aller']) ? $_POST['date_aller'] : '';
    $retour = isset($_POST['choices_retour']) ? $_POST['choices_retour'] : '';
    $date_retour = isset($_POST['date_retour']) ? $_POST['date_retour'] : '';
    $region = isset($_POST['region']) ? $_POST['region'] : '';

    // Prepare an SQL statement for insertion
    $stmt = $connect->prepare("INSERT INTO vol (depart, date_aller, retour, date_retour, region) VALUES ('$depart', '$date_aller' , '$retour', '$date_retou','$region')");
    
    // Bind the parameters to the statement
    $stmt->bind_param("sssss", $depart, $date_aller, $retour, $date_retour, $region);
    // Execute the statement
    if ($stmt->execute()) {
        echo "Data inserted successfully!";
    } else {
        echo "Error inserting data: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$connect->close();
?>
