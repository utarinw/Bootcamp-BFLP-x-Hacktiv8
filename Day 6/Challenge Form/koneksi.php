<?php
class database{
    
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = db_form;

    function __construct(){
        $koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (koneksi){
            echo "koneksi database MySQL & PHP Berhasil";
        } else{
            echo "koneksi database MySQL dan PHP Gagal";
        }
    }
}

$koneksi = new database;
?>
