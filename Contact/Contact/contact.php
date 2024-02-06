<?php
class Contact{
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getContact(){
        $sql = "SELECT * FROM person";
        $result = mysqli_query($this->db, $sql);
        $contact = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $contact;
    }

    public function addContact($nama_kontak,$nomor_telpon,$tanggal_lahir,$email,$alamat){
            $conn = $this->db->getConnection();
            
            // Retrieve form data
            $nama_kontak = $conn->real_escape_string($nama_kontak);
            $nomor_telpon = $conn->real_escape_string($nomor_telpon);
            $tanggal_lahir = $conn->real_escape_string($tanggal_lahir);
            $email = $conn->real_escape_string($email);
            $alamat = $conn->real_escape_string($alamat);

            // Insert data into the database
            $sql = "INSERT INTO person (nama_kontak,nomor_telpon,tanggal_lahir,email,alamat) VALUES ('$nama_kontak','$nomor_telpon','$tanggal_lahir','$email','$alamat')";

            # status updated
            if($conn->query($sql) === TRUE){
                header("Location: show-contact.php");
                exit;
            } else{
                return "Error: " .$sql. "<br>" . $conn->error;
            }
    }

    public function editContact($id_user,$nama_kontak,$nomor_telpon,$tanggal_lahir,$email,$alamat){
        // Retrieve form data
        $id_user = $conn->real_escape_string($id_user);
        $nama_kontak = $conn->real_escape_string($nama_kontak);
        $nomor_telpon = $conn->real_escape_string($nomor_telpon);
        $tanggal_lahir = $conn->real_escape_string($tanggal_lahir);
        $email = $conn->real_escape_string($email);
        $alamat = $conn->real_escape_string($alamat);

        // Insert data into the database
        $sql = "UPDATE person SET nama_kontak='$nama_kontak', nomor_telpon='$nomor_telpon', tanggal_lahir='$tanggal_lahir', email='$email', alamat='$alamat' WHERE id_user='$id_user'";

        # status updated
        if($conn->query($sql) === TRUE){
            echo "<script>window.location.href = 'index-kontak.php';</script>";
        } else{
            return "Error: " .$sql. "<br>" . $conn->error;
        }
    }

    public function deleteContact($id_user){
        $sql = "DELETE from person WHERE id_user='$id_user'";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
        # contact deleted
        if($conn->query($sql) === TRUE){
                return "Contact Deleted";
        } else{
                return "Error: " .$sql. "<br>" . $conn->error;
        }
    }

    public function getContactById($id){
        $data = [];
        $this->idKontak = $id;
        $sql_get_data_by_id = "SELECT * FROM person WHERE id='$this->id_user'";
        $result = mysqli_query($this->koneksi, $sql_get_data_by_id);
        if($result){
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
            mysqli_free_result($result);
        }else{
            echo "Error: " . mysqli_error($this->koneksi);
        }
        return $data;
    }
}
?>