<?php


error_reporting(0);
$servername = "localhost";
$username = "";
$password = "";
$dbname = "sql";
$datatable = "contact"; // MySQL table name
$results_per_page = 20; // number of results per page
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>