<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["email"]) && isset($_POST["password"])) {
        $email = trim($_POST["email"]);
        $password = trim($_POST["password"]);

        // Prepare statement to prevent SQL Injection
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Verify password (if hashed)
            if (password_verify($password, $user["password"])) {
                $_SESSION["user_id"] = $user["id"];
                $_SESSION["email"] = $user["email"];

                echo "✅ Login Successful! Redirecting...";
                header("Location: meat.php"); // Redirect to index.php
                exit(); // Ensure script stops executing
            } else {
                echo "<p class='error'>❌ Incorrect Password!</p>";
            }
        } else {
            echo "<p class='error'>❌ No user found with this email!</p>";
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "<p class='error'>⚠️ Please enter both email and password.</p>";
    }
} else {
    echo "<p class='error'>⚠️ Invalid request.</p>";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="http://localhost:8080/project/login.css">
</head>
<body>
<form action="login.php" method="post">
    <label for="email">Email:</label>
    <input type="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" name="password" required>

    <button type="submit">Login</button>
</form>

        <p>Don't have an account? <a href="signup.php">Sign up here</a></p>
    </div>
</body>
</html>
