<?php
// Connect to MySQL
$mysqli = new mysqli("localhost", "root", "honeyskin", "NCCIET");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Fetch data from database
$result = $mysqli->query("SELECT * FROM your_table");

// Convert data to JSON
$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Close connection
$mysqli->close();

// Send JSON response
header('Content-Type: application/json');
echo json_encode($data);
?>

