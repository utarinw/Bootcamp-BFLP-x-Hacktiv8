<?php
    session_start();

    // Check if the user clicked the back button
    if (isset($_POST['back'])) {
        // Redirect to the previous page (replace with your actual URL)
        header("Location: admin_manage_categories.php");
        exit();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "informasi_blog";
        $table = "db_kategori";
    
        // Create connection
        $conn = new mysqli($host, $username, $password, $database);

        // Retrieve form data
        $id_kategori = $_POST["id_kategori"];
        $nama_kategori = $_POST["nama_kategori"];
    
        // Insert data into the database
        $sql = "INSERT INTO db_kategori (id_kategori, nama_kategori) VALUES ('$id_kategori', '$nama_kategori')";
    
        if ($conn->query($sql) === TRUE) {
            echo "Data inserted successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        // Close the database connection
        $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Categories</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
        <a href="admin_manage_categories.php">Back</a>
        <h1 style="margin-bottom: 20px;">Add Categories</h1>
        <form class="add-post" action="" enctype="multipart/form-data" method="post">
            <div class="mb-3">
                <label for="title">Id Categories</label>
                <input type="text" name="id_kategori" placeholder="Add ID Kategori"> <br>
            </div>
            <div class="mb-3">
                <label for="title">Nama Kategori</label>
                <input type="text" name="nama_kategori" placeholder="Add Nama Kategori"> <br>
            </div>
            <div class="md-3">
                <input type="submit" value="Submit">
            </div>
        </form>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="db.php"></script>
</body>
</html>