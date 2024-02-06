<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate login credentials (replace with your authentication logic)
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Example: Check against a database
    if ($username == "admin" && $password == "password") {
        $_SESSION["admin"] = true;
        $_SESSION["admin_username"] = $username;
        header("Location: dashboard_admin.php");
        exit();
    } else {
        $error_message = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
    <h1>Admin Login</h1>

    <?php if (isset($error_message)) : ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
    <?php endif; ?>

    <form action="admin_login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>