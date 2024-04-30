<?php
// Include your database connection code or functions
include("db.php");

// SQL query to copy data from users to topics
$sql = "INSERT INTO topics (name, description)
        SELECT username, email FROM users";
// Execute the query
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if ($result) {
    // Query executed successfully
    echo "Données copiées avec succès.";
} else {
    // Query failed
    echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>