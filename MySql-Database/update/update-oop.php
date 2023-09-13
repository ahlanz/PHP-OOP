<?php 
$host = "localhost";
$user = "root";
$password = "";
$dbname = "latihan";

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {

    echo "Koneksi berhasil<br>";
}

$sql = "UPDATE user SET email='ahlan@gmail.com' WHERE id=0";

if ($conn->query($sql) === TRUE) {
  echo "Berhasil Update Data";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>