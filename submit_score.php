<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tetris";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Insert player name and score into high_scores table
$sql = "INSERT INTO high_scores (player_name, score) VALUES ('$name', 'your_score')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>