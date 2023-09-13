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

$sql = "SELECT id, nama, email FROM user WHERE id='1'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["nama"]. " " . $row["email"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);


?>