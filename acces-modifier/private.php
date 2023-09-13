<?php 
class Mobil {
    // Atribut private
    private $tahun;
    // Konstruktor
    public function __construct($tahun) {
        $this->tahun = $tahun;
    }
    // Metode publik untuk mengakses atribut private
    public function getTahun() {
        return $this->tahun;
    }
    // Metode publik untuk mengubah atribut private
    public function setTahun($tahunBaru) {
        $this->tahun = $tahunBaru;
    }
}
// Membuat objek Mobil
$mobil = new Mobil(2020);
// Mengakses atribut private menggunakan metode publik
echo "Tahun mobil: " . $mobil->getTahun(); 
// Output: Tahun mobil: 2020
// Mengubah atribut private menggunakan metode publik
$mobil->setTahun(2022);
// Mengakses atribut private setelah diubah
echo "Tahun mobil setelah perubahan: " . $mobil->getTahun(); 
// Output: Tahun mobil setelah perubahan: 2022
?>