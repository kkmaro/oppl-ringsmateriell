<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "administrator_valg";
$dbPassword = "HqiK%J4C5eJ^FkaZ";
$dbName     = "kommune";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>