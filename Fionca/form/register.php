<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
    <h2>User Registration</h2>
    <form method="post" action="registration_data.php">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="candidate_username" required><br><br>
        <label for="email">fullname:</label><br>
        <input type="text" id="fullname" name="candidate_fullname" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="candidate_email" required><br><br>
        
        <label for="mobile">Mobile Number:</label><br>
        <input type="text" id="mobile" name="candidate_contact" required><br><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password_generation" required><br><br>
        
        <input type="submit" value="Register">
    </form>
</body>
</html>
