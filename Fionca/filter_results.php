<?php
// Database connection details
$servername = "localhost";
$username_db = "root";
$password_db = "";
$dbname = "tumcha_neta";

// Create connection
$conn = new mysqli($servername, $username_db, $password_db, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get filter parameters from URL
$candidate_name = isset($_POST['candidate_name']) ? $_POST['candidate_name'] : '';
$area = isset($_POST['area']) ? $_POST['area'] : '';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';

// Build SQL query with filters
$sql = "SELECT * FROM candidate_registration WHERE 1=1";

if ($candidate_name != '') {
    $sql .= " AND candidate_fullname LIKE '%" . $conn->real_escape_string($candidate_name) . "%'";
}
if ($area != '') {
    $sql .= " AND area LIKE '%" . $conn->real_escape_string($area) . "%'";
}
if ($gender != '') {
    $sql .= " AND gender = '" . $conn->real_escape_string($gender) . "'";
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "Name: " . htmlspecialchars($row["candidate_fullname"]) . "<br>";
        echo "Area: " . htmlspecialchars($row["area"]) . "<br>";
        echo "Gender: " . htmlspecialchars($row["gender"]) . "<br>";
        echo "<hr>";
    }
} else {
    echo "0 results";
}

$conn->close();
