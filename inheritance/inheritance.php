<?php 
// Kelas dasar (superclass)
class Hewan {
    public $nama;

    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    public function bersuara(){
        return "Hewan ini Bersuara";
    }
}
// Kelas turunan (subclass)
class Kucing extends Hewan {
    public function bersuara(){
        return "Kucing ini bersuara meong";
    }

    public function tidur(){
        return "Kucing ini tidur";
    }
}
// Membuat objek dari kelas turunan
$kucing = new Kucing("Anime");
// Mengakses atribut dari kelas dasar
echo "Nama : $kucing->nama <br>";
// Memanggil metode dari kelas turunan
echo $kucing->bersuara();
echo"<br>";
echo $kucing->tidur();
?>