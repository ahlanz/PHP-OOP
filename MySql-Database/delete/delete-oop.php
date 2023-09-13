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
    echo "Koneksi berhasil <br>";
}

$sql = "DELETE FROM user WHERE id=3";

if ($conn->query($sql) === TRUE) {
  echo "Data Berhasil Dihapus";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>