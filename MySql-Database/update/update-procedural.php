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

$sql = "UPDATE user SET nama='ahlan' WHERE id=0";

if (mysqli_query($conn, $sql)) {
  echo "Berhasil Update Data";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>