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


    $name = $_POST['name'];


// Prepare and execute SQL statement
$sql = "INSERT INTO players1 (name) VALUES ('$name')";

if ($conn->query($sql) === TRUE) {
    // echo "Player name submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header("Location: tetris gam.php?inputValue=" . urlencode($inputValue));
exit();
// Close connection
$conn->close();
?>
