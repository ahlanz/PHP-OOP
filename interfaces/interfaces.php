<?php
interface Animal {
  public function bikinSuara();
}

class Cat implements Animal {
  public function bikinSuara() {
    echo "Meow";
  }
}

$animal = new Cat();
$animal->bikinSuara();
//output : Meow
?>