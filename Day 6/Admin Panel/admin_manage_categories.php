<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION["admin"])) {
    header("Location: admin_login.php");
    exit();
}

// Include your database connection file
include 'db_categories.php';

// Fetch categories from the database
$sql = "SELECT * FROM informasi_blog.db_kategori";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $categories = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $categories = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories Manage</title>
</head>
<body>
    <h1>Admin Manage Categories</h1>
    
<!-- Display list of categories with options to edit or delete -->
<ul>
    <?php foreach ($categories as $category) : ?>
        <li>
            <strong><?php echo $category['nama_kategori']; ?></strong>
            <a href="admin_edit_category.php?id=<?php echo $category['id_kategori']; ?>">Edit</a>
            <a href="admin_delete_category.php?id=<?php echo $category['id_kategori']; ?>">Delete</a>
        </li>
    <?php endforeach; ?>
</ul>

<a href="admin_add_category.php">Add New Category</a>
<br>
<a href="dashboard_admin.php">Back to Dashboard</a>
</body>
</html>