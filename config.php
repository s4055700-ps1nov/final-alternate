<?php
$servername = "talsprddb02.int.its.rmit.edu.au";
$port = 3306;
$username = "COSC3046_2402_G12";
$password = "psWx0YShx1pT";
$dbname = "COSC3046_2402_G12";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
