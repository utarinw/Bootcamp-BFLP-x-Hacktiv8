<?php
class Contact {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getContact(){
        $sql = "SELECT * FROM person";
        $result = mysqli_query($this->conn, $sql);
        $contact = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $contact;
    }

    public function addContact($nama_kontak, $nomor_telpon, $tanggal_lahir, $email, $alamat){
        // Retrieve form data
        $nama_kontak = $this->conn->real_escape_string($nama_kontak);
        $nomor_telpon = $this->conn->real_escape_string($nomor_telpon);
        $tanggal_lahir = $this->conn->real_escape_string($tanggal_lahir);
        $email = $this->conn->real_escape_string($email);
        $alamat = $this->conn->real_escape_string($alamat);

        // Insert data into the database
        $sql = "INSERT INTO person (nama_kontak, nomor_telpon, tanggal_lahir, email, alamat) VALUES ('$nama_kontak', '$nomor_telpon', '$tanggal_lahir', '$email', '$alamat')";
        
        if($this->conn->query($sql) === TRUE){
            header("Location: show-contact.php");
            exit;
        } else{
            return "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }

    public function editContact($id_user, $nama_kontak, $nomor_telpon, $tanggal_lahir, $email, $alamat){
        // Retrieve form data
        $id_user = $this->conn->real_escape_string($id_user);
        $nama_kontak = $this->conn->real_escape_string($nama_kontak);
        $nomor_telpon = $this->conn->real_escape_string($nomor_telpon);
        $tanggal_lahir = $this->conn->real_escape_string($tanggal_lahir);
        $email = $this->conn->real_escape_string($email);
        $alamat = $this->conn->real_escape_string($alamat);

        // Update data in the database
        $sql = "UPDATE person SET nama_kontak='$nama_kontak', nomor_telpon='$nomor_telpon', tanggal_lahir='$tanggal_lahir', email='$email', alamat='$alamat' WHERE id_user='$id_user'";
        
        if($this->conn->query($sql) === TRUE){
            echo "<script>window.location.href = 'index-kontak.php';</script>";
        } else{
            return "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }

    public function deleteContact($id_user){
        $id_user = $this->conn->real_escape_string($id_user);
        $sql = "DELETE from person WHERE id_user='$id_user'";
        if($this->conn->query($sql) === TRUE){
            return "Contact Deleted";
        } else{
            return "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }

    public function getContactById($id){
        $data = [];
        $sql_get_data_by_id = "SELECT * FROM person WHERE id_user='$id'";
        $result = mysqli_query($this->conn, $sql_get_data_by_id);
        if($result){
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
            mysqli_free_result($result);
        }else{
            echo "Error: " . mysqli_error($this->conn);
        }
        return $data;
    }
}
?>
