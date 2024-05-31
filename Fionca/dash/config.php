<?php

// $conn = mysqli_connect("localhost", "root", "", "tumcha_neta");

// if (!$conn) {
//     echo "Connection Failed";
// }
// fetch_data.php

// include 'db_connect.php';

// Fetch candidate data
$candidate_id = "aditya_1"; // example candidate ID
$sql = "SELECT * FROM candidate_registration WHERE candidate_username ='aditya_1'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
} else {
  echo "0 results";
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["newEmail"])) {
    // Sanitize and validate the input
    $newEmail = mysqli_real_escape_string($conn, $_POST["newEmail"]);

    // Update the email address in the database
    $updateSql = "UPDATE candidate_registration SET candidate_email = '$newEmail' WHERE candidate_username = '$candidate_id'";
    if (mysqli_query($conn, $updateSql)) {
        echo "";
        // Update the $row variable with the new email
        $row['candidate_email'] = $newEmail;
    } else {
        echo "Error updating email: " . mysqli_error($conn);
    }
}
$conn->close();
?>
