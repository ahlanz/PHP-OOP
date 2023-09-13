<?php 
class Burung {
    // Atribut protected
    protected $jumlahkaki;
    // Konstruktor
    public function __construct($kaki) {
        $this->jumlahkaki = $kaki;
    }
    // Metode untuk menampilkan jumlah kaki
    public function tampilkanJumlahkaki() {
        echo "Burung ini memiliki {$this->jumlahkaki} kaki.";
    }
}
class Hewan extends Burung {
    // Konstruktor untuk kelas turunan
    public function __construct($kaki) {
        parent::__construct($kaki);
    }

    // Metode khusus untuk Hewan
    public function infoHewan() {
        echo "Ini adalah Hewan dengan {$this->jumlahkaki} kaki.";
    }
}
// Membuat objek Hewan
$Hewan = new Hewan(4);
// Mengakses metode untuk menampilkan jumlah kaki dari kelas induk
$Hewan->tampilkanJumlahkaki(); 
// Output: Burung ini memiliki 4 kaki.
// Mengakses metode khusus untuk Hewan
$Hewan->infoHewan(); 
// Output: Ini adalah Hewan dengan 4 kaki.
?>