<?php 
// Informasi koneksi MySQL
$host = "localhost";
$user = "root";
$password = "";
$database = "latihan";

// Membuat koneksi
$conn = mysqli_connect($host, $user, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi berhasil.";
}
// Menutup koneksi
mysqli_close($conn);
?>