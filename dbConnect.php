<?php
$servername = "davisonit.cc";
$username = "sq_davison";
$password = "jkgfV95c29kXtU";
$dbname = "sq_davison";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
