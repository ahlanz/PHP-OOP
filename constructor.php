<?php 
class Mobil {
    public $merek;
    public $tahun;

    // Konstruktor
    public function __construct($merek, $tahun) {
        $this->merek = $merek;
        $this->tahun = $tahun;
    }
}
//Contoh Penggunaan Konstruktor dalam Inisialisasi Objek
// Membuat objek dengan menggunakan konstruktor
$mobil1 = new Mobil("Toyota", 2022);
$mobil2 = new Mobil("Honda", 2021);

// Mengakses atribut objek
echo "Mobil pertama adalah {$mobil1->merek} tahun {$mobil1->tahun}"; // Output: Mobil pertama adalah Toyota tahun 2022
echo "Mobil kedua adalah {$mobil2->merek} tahun {$mobil2->tahun}";   // Output: Mobil kedua adalah Honda tahun 2021
?>