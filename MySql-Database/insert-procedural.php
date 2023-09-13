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

//kondisi ketika koneksi berhasil akan melanjutkan proses insert data
if ($conn) {
    $nama = "budi";
    $email = "hadar@gmail.com";
    //query sql untuk masukan data
    $query = "INSERT INTO `user` (`nama`, `email`) VALUES ('$nama', '$email')";
    
    if (mysqli_query($conn,$query) == true) {
    echo "Data berhasil dimasukan.";
    } else {
    echo "gagal masukan data";
    }
   }
   
   // Menutup koneksi
   mysqli_close($conn);
?>   