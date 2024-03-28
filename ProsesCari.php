<?php
include 'koneksi.php';

$keyword = $_GET['keyword'];


$query = "SELECT * FROM users WHERE name LIKE '%$keyword%' OR email LIKE '%$keyword%'";
$result = $koneksi->query($query);

if ($result->num_rows > 0) {
    
    echo "<h2>Data Yang Ditemukan</h2>";

    while ($row = $result->fetch_assoc()) {
        echo "<li>Name: " . $row["name"] . ", Email: " . $row["email"] . "</li>";
    }

} else {
    
    echo "data Tidak Di Temukan";
}
?>