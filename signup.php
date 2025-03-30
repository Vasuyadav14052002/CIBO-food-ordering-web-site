<?php
include 'config.php';

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all fields are set
    if (!isset($_POST['username']) || !isset($_POST['email']) || !isset($_POST['password'])) {
        die("Error: Form fields are missing.");
    }

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Debugging: Print received data
    echo "Received data: Username - $username, Email - $email <br>";

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");

    if (!$stmt) {
        die("Error in SQL Query: " . $conn->error);
    }

    $stmt->bind_param("sss", $username, $email, $password);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    echo "Signup successful!";
} else {
    echo "Invalid request.";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="http://localhost:8080/project/login.css">
</head>
<body>
    <div class="form-container">
        <h2>Signup</h2>
        <form action="signup.php" method="POST">
    <input type="text" name="username" placeholder="Enter Username" required>
    <input type="email" name="email" placeholder="Enter Email" required>
    <input type="password" name="password" placeholder="Enter Password" required>
    <button type="submit">Sign Up</button>
</form>
        <!-- <form action="" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Signup</button>
        </form> -->
        <p>Already have an account? <a href="login.php">Login here</a></p>
    </div>
</body>
</html>
