<?php 
//membuat class yang akan dijadikan object
class Mobil {
    // Properti (atribut)
    public $merek;
    public $tahun;

    // Metode (perilaku)
    public function infoMobil() {
        return "Ini adalah mobil {$this->merek} tahun {$this->tahun}.";
    }
}
// Membuat objek dari class Mobil
$mobil1 = new Mobil("");
$mobil1->merek = "Toyota";
$mobil1->tahun = 2022;
// Memanggil metode pada objek
echo $mobil1->infoMobil(); 
// Output: Ini adalah mobil Toyota tahun 2022.
?>