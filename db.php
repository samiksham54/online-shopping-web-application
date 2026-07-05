<?php
$conn = new mysqli("localhost", "root", "", "wt_project", 3307);

// If using port 3307:
// $conn = new mysqli("localhost", "root", "", "wt_project", 3307);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>