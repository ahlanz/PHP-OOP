<?php 
class Matematika {
    // static method
    public static function tambah($angka1, $angka2) {
        return $angka1 + $angka2;
    }
}

// Memanggil static method
$hasil = Matematika::tambah(5, 3);
echo "Hasil penjumlahan: " . $hasil; 
// Output: Hasil penjumlahan: 8
?>