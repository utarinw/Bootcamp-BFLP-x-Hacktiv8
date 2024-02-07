<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database configuration
    $servername = "localhost";      // e.g., localhost
    $username = "root";
    $password = "";
    $database = "informasi_blog";    // Use the actual name of your blog database
    $table = "posts";               // Assuming you have a 'posts' table

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve form data
    $title = htmlspecialchars($_POST["title"]);
    $content = htmlspecialchars($_POST["content"]);
    $category = htmlspecialchars($_POST["category"]);

    // Process the main image file
    if ($_FILES["main_image"]["error"] == 0) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["main_image"]["name"]);

        // Check if file already exists, rename if necessary
        $counter = 1;
        while (file_exists($target_file)) {
            $target_file = $target_dir . $counter . '_' . basename($_FILES["main_image"]["name"]);
            $counter++;
        }

        // Move the uploaded file to the target directory
        move_uploaded_file($_FILES["main_image"]["tmp_name"], $target_file);
        $main_image = $target_file;
    } else {
        $main_image = null;
    }

    // Insert data into the database
    $sql = "INSERT INTO $table (title, konten, kategori, img_utama) VALUES ('$title', '$content', '$category', '$main_image')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
} else {
    echo "Invalid request method.";
}
?>