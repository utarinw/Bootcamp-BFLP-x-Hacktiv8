<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION["admin"])) {
    header("Location: admin_login.php");
    exit();
}

// Include your database connection file
include 'db_users.php';

// Fetch categories from the database
$sql = "SELECT * FROM informasi_blog.db_users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $users = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $users = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Manage</title>
</head>
<body>
    <h1>Admin Manage Users</h1>
    
<!-- Display list of categories with options to edit or delete -->
<ul>
    <?php foreach ($users as $users) : ?>
        <li>
            <strong><?php echo $users['nama_user']; ?></strong> 
            <?php echo $users['email_user']; ?>
            <?php echo $users['pass_user']; ?>
            <a href="admin_edit_user.php?id=<?php echo $users['id_user']; ?>">Edit</a>
            <a href="admin_delete_user.php?id=<?php echo $users['id_user']; ?>">Delete</a>
        </li>
    <?php endforeach; ?>
</ul>

<a href="admin_add_user.php">Add New User</a>
<br>
<a href="dashboard_admin.php">Back to Dashboard</a>
</body>
</html>