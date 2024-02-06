<?php
session_start();

// Check if the user is authenticated
if (!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true) {
    header("Location: admin_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Admin Dashboard</h1>
    
    <!-- Add links to manage posts, categories, users, and comments -->
    <ul>
        <li><a href="admin_manage_posts.php">Manage Posts</a></li>
        <li><a href="admin_manage_categories.php">Manage Categories</a></li>
        <li><a href="admin_manage_users.php">Manage Users</a></li>
        <li><a href="admin_manage_comments.php">Manage Comments</a></li>
        <li><a href="admin_logout.php">Logout</a></li>
    </ul>
</body>
</html>
