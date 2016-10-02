<?php
$servername = "107.180.26.155";
$username = "austen_stone";
$password = "stone";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
echo "Max is fucking gay";
echo "  fuck off m8"

?>
