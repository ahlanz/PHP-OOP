<?php 
// Antarmuka (interface) pertama
interface Penerbangan {
    public function lepasLandas();
    public function mendarat();
}

// Antarmuka (interface) kedua
interface Kendaraan {
    public function bergerak();
}

// Kelas yang mengimplementasikan antarmuka-antarmuka tersebut
class Pesawat implements Penerbangan, Kendaraan {
    public function lepasLandas() {
        echo "Pesawat lepas landas.<br>";
    }

    public function mendarat() {
        echo "Pesawat mendarat.<br>";
    }

    public function bergerak() {
        echo "Pesawat bergerak.<br>";
    }
}

// Membuat objek Pesawat
$pesawat = new Pesawat();

// Memanggil metode-metode yang diimplementasikan dari antarmuka
$pesawat->lepasLandas(); 
// Output: Pesawat lepas landas.
$pesawat->mendarat();    
// Output: Pesawat mendarat.
$pesawat->bergerak();    
// Output: Pesawat bergerak.

?>