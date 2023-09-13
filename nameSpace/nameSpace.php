<?php 
//membuat nameSpace ke 1
namespace Html1;

class NamaKelas {
    public $title = "hai";
    public function sayHello($title){
        echo "$title saya dari class Html1 namespace.";
    }
}
//membuat namespace ke 2
namespace Html2;
class NamaKelas {
    public $title = "hai";
    public function sayHello($title){
        echo "$title saya dari class Html2 namespace.";
    }
}
//buat 2 objek untuk membedakan masing2 namespaces
$objek1 = new \Html1\NamaKelas();
$objek1->sayHello("Hello");
echo"<br>";
//Output : Hello saya dari class Html1 namespace.
$objek2 = new \Html2\NamaKelas();
$objek2->sayHello("Hai");
//Output : Hello saya dari class Html2 namespace.
?>