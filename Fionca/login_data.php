<?php
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tumcha_neta";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $email = $_POST["candidate_email"];
    $password = $_POST["password_generation"];

    // Prepare and execute the query to fetch profession from candidate_further_details
    $sql = "SELECT cd.candidate_username, cd.password_generation, cfd.self_profession 
            FROM candidate_registration cd 
            JOIN candidate_further_details cfd ON cd.candidate_username = cfd.candidate_username 
            WHERE cd.candidate_email = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // User found, check password
        $row = $result->fetch_assoc();
        $hashed_password = $row["password_generation"];
        
        // Debugging: Print out hashed password from the database and hashed password generated during login
        echo "Hashed Password from Database: " . $hashed_password . "<br>";
        echo "Hashed Password from Login: " . password_hash($password, PASSWORD_DEFAULT) . "<br>";

        if (password_verify($password, $hashed_password)) {
            // Password is correct
            $candidate_username = $row['candidate_username'];
            $profession = $row['self_profession'];

            // Fetch user's full name from candidate_registration based on email
            $query = "SELECT candidate_fullname FROM candidate_registration WHERE candidate_email = ?";
            $stmt2 = $conn->prepare($query);
            $stmt2->bind_param("s", $email); // Bind email instead of username
            $stmt2->execute();
            $result2 = $stmt2->get_result();

            if ($result2->num_rows > 0) {
                $fullname_row = $result2->fetch_assoc();
                $fullname = $fullname_row['candidate_fullname'];

                // Store user data in session
                $_SESSION['username'] = $candidate_username;
                $_SESSION['user']['candidate_fullname'] = $fullname; // Add full name to session
                $_SESSION['user']['self_profession'] = $profession; // Add profession to session

                // Redirect to index.php
                header("Location: index.php");
                exit(); // Ensure no further code execution
            } else {
                // Full name not found for the user
                echo "<script>alert('Full name not found!'); window.history.back();</script>";
            }
        } else {
            // Password is incorrect
            echo "<script>alert('Incorrect password!'); window.history.back();</script>";
        }
    } else {
        // User not found
        echo "<script>alert('User not found!'); window.history.back();</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
