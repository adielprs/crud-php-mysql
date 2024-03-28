<?php
include 'koneksi.php';



    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $query = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header('Location: index.php');
        exit();
    } else {
        echo 'Gagal mengubah data';
    }
    
?>
