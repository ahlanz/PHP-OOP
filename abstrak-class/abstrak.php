<?php 
//super class
abstract class Mobil {
    public $nama;
    public function __construct($nama)
    {
        $this->nama = $nama;
    }
    abstract public function intro() : string;
}

//subclass
class Audi extends Mobil {
    public function intro() : string {
        return "aku adalah mobil $this->nama";
    }
}

//Membuat Object dari subclass
$audi = new Audi("Honda Inova");
echo $audi->intro();
//output : aku adalah mobil Honda Inova
?>