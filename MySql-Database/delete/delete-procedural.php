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
 echo "Koneksi berhasil. <br>";
}

$sql = "DELETE FROM user WHERE id=2";

if (mysqli_query($conn, $sql)) {
  echo "Berhasil hapus Data";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);


?>