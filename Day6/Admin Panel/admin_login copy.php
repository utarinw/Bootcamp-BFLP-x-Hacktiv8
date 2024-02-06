<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate login credentials (replace with your authentication logic)
    $email = $_POST["email"];
    $password = $_POST["password"];

    // connect database
    include 'db_users.php';

     // Query to retrieve user data
     $sql = "SELECT * FROM db_users WHERE email_user='$email' AND pass_user='$password'";
     $result = $conn->query($sql);

    // Example: Check against a database
    if ($result->num_rows == 1) {
        session_start();
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

    <form action="admin_login copy.php" method="post">
        <label for="username">Email:</label>
        <input type="text" name="email" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>