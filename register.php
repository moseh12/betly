<?php
// Include the database connection code here
include "includes/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone_number = $_POST["phone_number"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);

    // Validate and sanitize input as needed

    // Insert user data into the database
    $query = "INSERT INTO users (phone_number, password) VALUES (?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $phone_number, $password);
    
    if ($stmt->execute()) {
        // Registration successful, redirect to login page
        header("Location: login.php");
        exit();
    } else {
        $error_message = "Registration failed. Please try again later.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<body>
    <h1>Registration Page</h1>
<?php if (isset($error_message)) echo "<p>$error_message</p>"; ?>
    <form method="POST" action="register.php">
        <label for="phone_number">Phone Number:</label>
        <input type="text" name="phone_number" required><br>
        
        <label for="password">Password:</label>
        <input type="password" name="password" required><br>
        
        <input type="submit" value="Register">
    </form>
    
</body>
</html>