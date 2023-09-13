<?php 
class Mobil {
    // Atribut public
    public $merek;

    // Konstruktor
    public function __construct($merek) {
        $this->merek = $merek;
    }

    // Metode public
    public function getInfo() {
        return "Mobil ini adalah {$this->merek}";
    }
}
// Membuat objek dari kelas Mobil
$mobil1 = new Mobil("honda");
// Mengakses atribut public dari luar kelas
echo "Merek mobil: " . $mobil1->merek; // Output: Merek mobil: Toyota
// Mengakses metode public
echo $mobil1->getInfo(); // Output: Mobil ini adalah Toyota
?>