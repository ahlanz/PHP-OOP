<?php 
class Mobil {
    public $merek;
    public $tahun;
    
    public function infoMobil() {
        return "Mobil ini adalah {$this->merek} tahun {$this->tahun}";
    }
}

$mobil1 = new Mobil();
$mobil1->merek = "Toyota";
$mobil1->tahun = 2022;

echo $mobil1->infoMobil(); // Output: Mobil ini adalah Toyota tahun 2022
