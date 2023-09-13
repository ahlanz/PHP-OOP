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

$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["nama"]. " -Email : " . $row["email"]. "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();
