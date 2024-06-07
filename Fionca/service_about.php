<?php
function getCandidateData($username){
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "tumcha_neta"; // Replace with your actual database name

    // Create connection
    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $candidateData = [];

    // Retrieve candidate registration details
    $stmt_registration = $conn->prepare("SELECT candidate_fullname, candidate_profile_path FROM candidate_registration WHERE candidate_username = ?");
    $stmt_registration->bind_param('s', $username);
    $stmt_registration->execute();
    $result_registration = $stmt_registration->get_result();

    if ($result_registration->num_rows > 0) {
        $row_registration = $result_registration->fetch_assoc();
        $candidateData['fullname'] = $row_registration['candidate_fullname'];
        $candidateData['profile_picture'] = $row_registration['candidate_profile_path'];
    }

    $stmt_registration->close();

    // Retrieve candidate party ideologies details
    $stmt_ideologies = $conn->prepare("SELECT * FROM candidate_party_ideologies WHERE username = ?");
    $stmt_ideologies->bind_param('s', $username);
    $stmt_ideologies->execute();
    $result_ideologies = $stmt_ideologies->get_result();

    if ($result_ideologies->num_rows > 0) {
        $row_ideologies = $result_ideologies->fetch_assoc();
        $candidateData['party_logo'] = $row_ideologies['party_logo_path'];
        $candidateData['ideologies'] = $row_ideologies['ideologies'];
        $candidateData['profile_banner'] = $row_ideologies['profile_banner_path'];
    }

    $stmt_ideologies->close();

    // Retrieve candidate further details
    $stmt_further_details = $conn->prepare("SELECT * FROM candidate_further_details WHERE candidate_username = ?");
    $stmt_further_details->bind_param('s', $username);
    $stmt_further_details->execute();
    $result_further_details = $stmt_further_details->get_result();

    if ($result_further_details->num_rows > 0) {
        $row_further_details = $result_further_details->fetch_assoc();
        $candidateData['candidate_age'] = $row_further_details['candidate_age'];
        $candidateData['candidate_dob'] = $row_further_details['candidate_dob'];
        $candidateData['candidate_education'] = $row_further_details['candidate_education'];
        $candidateData['self_profession'] = $row_further_details['self_profession'];
        $candidateData['candidate_area_pincode'] = $row_further_details['candidate_area_pincode'];
        $candidateData['candidate_city'] = $row_further_details['candidate_city'];
        $candidateData['candidate_email'] = $row_further_details['candidate_email'];
    }

    $stmt_further_details->close();

    // Retrieve candidate social media links
    $stmt_social_links = $conn->prepare("SELECT * FROM candidate_social_links WHERE candidate_username = ?");
    $stmt_social_links->bind_param('s', $username);
    $stmt_social_links->execute();
    $result_social_links = $stmt_social_links->get_result();

    if ($result_social_links->num_rows > 0) {
        $row_social_links = $result_social_links->fetch_assoc();
        $candidateData['youtube'] = $row_social_links['youtube'];
        $candidateData['facebook'] = $row_social_links['facebook'];
        $candidateData['instagram'] = $row_social_links['instagram'];
        $candidateData['twitter'] = $row_social_links['twitter'];
        $candidateData['linkedin'] = $row_social_links['linkedin'];
        // Add more social media links if needed
    }

    $stmt_social_links->close();
    $conn->close();

    return $candidateData;
}

function getCandidateEmail($username) {
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "tumcha_neta"; // Replace with your actual database name

    // Create connection
    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $candidateEmail = '';

    // Prepare and execute query to fetch candidate email
    $stmt_email = $conn->prepare("SELECT candidate_email FROM candidate_further_details WHERE candidate_username = ?");
    $stmt_email->bind_param("s", $username);
    $stmt_email->execute();
    $result_email = $stmt_email->get_result();

    // Fetch email
    if($row_email = $result_email->fetch_assoc()) {
        $candidateEmail = $row_email['candidate_email'];
    }

    $stmt_email->close();
    $conn->close();

    return $candidateEmail;
}
?>
