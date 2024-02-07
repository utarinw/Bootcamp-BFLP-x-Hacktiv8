<?php
include 'connection.php';
include 'contact.php';

$db = new Database();
$contact = new Contact($db);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_kontak = $_POST["nama_kontak"];
    $nomor_telpon = $_POST["nomor_telpon"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $email = $_POST["email"];
    $alamat = $_POST["alamat"];

    $result = $contact->addContact($nama_kontak,$nomor_telpon,$tanggal_lahir,$email,$alamat);
    echo $result;
}
?>