<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // inisialisasi
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "informasi_blog";

    // koneksi
    $koneksi = new mysqli($host, $username, $password, $database);

    if($koneksi){
        echo "koneksi database MySQL & PHP Berhasil";
    } else{
        echo "koneksi database MySQL dan PHP Gagal";
    }

    // get data
    $title = $_POST["title"];
    $kategori = $_POST["kategori"];
    $content = $_POST["content"];
    
    // insert gambar
    // $image = $_FILES['image'];

    // if ($image["error"] === UPLOAD_ERR_OK){
    //     $tmp_path = $image['tmp_name'];
    //     $image_data = file_get_contents($tmpt_path);

    //     $target_dir = "uploads/";
    //     $target_file = $target_dir . basename($image['name']);
    //     move_uploaded_file($tmp_path, $target_file);
    // }else{
    //     echo "Eror upload file".$image['eror'];
    // }

    if ($_FILES["image"]["error"] == 0){
        $target_dir = "img-upload/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        $image = $target_file;
    } else{
        $image = null;
    }
    
    // Insert data into the database
    $sql = "INSERT INTO db_posts ('title', 'konten', 'kategori','img_utama') VALUES ('$title', '$content', '$kategori', '$image')";
}
?>
