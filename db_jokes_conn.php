<?php
//variables for db
$servername = "localhost";
$username = "root";
$password = "Sham";
$db ="jokesdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  //echo "Connected successfully";
  echo "<p></p>";

?>