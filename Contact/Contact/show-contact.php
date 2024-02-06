<?php
include 'connection.php';
include 'contact.php';

$db = new Database();
$conn = $db->getConnection();
$contact = new Contact($conn);

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['add_contact'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        if(!empty($name) && !empty($phone)) {
            if($contact->addContact($name, $email, $phone)) {
                echo "Contact added successfully.";
            } else {
                echo "Failed to add contact.";
            }
        } else {
            echo "Name and Phone are required fields.";
        }
    }

    if(isset($_POST['edit_contact'])) {
        $id_user = $_POST['id_user'];
        $nama_kontak = $_POST['nama_kontak'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        if(!empty($id) && !empty($name) && !empty($phone)) {
            if($contact->editContact($id, $name, $email, $phone)) {
                echo "Contact updated successfully.";
            } else {
                echo "Failed to update contact.";
            }
        } else {
            echo "ID, Name, and Phone are required fields.";
        }
    }
}

$contacts = $contact->getContact();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Apps</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <!-- navbar -->
    <nav id="navbar" class="navbar">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="add-contact.html">Add Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="show-contact.php">Show Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <section id="header" class="text-center">
        <p class="h3">Contact List</p>
    </section>

    <!-- Tabel Contact -->
    <section id="contact-tabel">
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Nama Kontak</th>
                <th>Nomor Telpon</th>
                <th>Tanggal Lahir</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
            <?php foreach($contacts as $contact): ?>
            <tr>
                <td><?php echo $contact['id_user']; ?></td>
                <td><?php echo $contact['nama_kontak']; ?></td>
                <td><?php echo $contact['nomor_telpon']; ?></td>
                <td><?php echo $contact['tanggal_lahir']; ?></td>
                <td><?php echo $contact['email']; ?></td>
                <td><?php echo $contact['alamat']; ?></td>
                <td>
                    <!-- <form action="" method="POST">
                        <input type="hidden" name="id" value="<?php echo $contact['id_user']; ?>">
                        <button class="btn btn-success" type="submit" name="edit_contact">Edit</button>
                        <button class="btn btn-danger" type="submit" name="delete_contact">Delete</button>
                    </form> -->
                    <a href="edit_contact.php" class="btn btn-success" type="submit" name="edit_contact">Edit</button>
                    <button class="btn btn-danger" type="submit" name="delete_contact">Delete</button>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </section>

    <!-- Source Script -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>