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

    echo "Koneksi berhasil";
}
// Check connection
$sql = "INSERT INTO `user` (`nama`, `email`, `id`) VALUES ('budi', 'budi@gmail.com', '1')";
if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
