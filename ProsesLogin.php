<?php
include 'koneksi.php';

$name = $_POST['name'];
$email = $_POST['email'];

$query = "SELECT * FROM users WHERE name='$name' AND email='$email'";
$result = mysqli_query($koneksi, $query);

if ($result->num_rows > 0) {
    echo '<script>alert("Berhasil Login"); window.location.href = "table.php";</script>';
} else {
    echo "Login gagal. Periksa kembali nama dan email Anda.";
}

?>