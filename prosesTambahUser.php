 <?php
    include 'koneksi.php';


        $nama = $_POST['name'];
        $email = $_POST['email'];

        $query = "INSERT INTO users (name, email) VALUES ('$nama', '$email')";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            header('Location: table.php');
            exit();
        } else {
            echo '<script>alert("Gagal menambahkan data"); window.location.href = "viewTambahU.php";</script>';
        }
    
?>
