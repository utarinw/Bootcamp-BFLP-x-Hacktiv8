<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Contact</title>
</head>
<body>
    <h1>Delete Contact</h1>
    <?php
    if (isset($_GET['id_user'])) {
        $id_user = $_GET['id_user'];
        ?>
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?php echo $id_user; ?>">
            <p>Are you sure you want to delete the contact with ID <?php echo $id_user; ?>?</p>
            <button type="submit" name="delete_contact">Delete Contact</button>
            <a href="index.php">Cancel</a>
        </form>
        <?php
    } else {
        echo "ID is required to delete a contact.";
    }
    ?>
</body>
</html>
