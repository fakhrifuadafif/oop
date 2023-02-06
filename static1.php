<!-- static keyword

member yang terikat class, bukan dengan object

nilai static akan selalu tetap meskipun object di instansiasi berulang kali

membuat code menjadi 'prosedural' 

biasa digunakan untuk membuat fungsi bantuan / helper

atau digunaka di class-class utility pada framework -->

<?php

class contohstatic {
    public static $angka = 1;

    public static function haloo() {
        return "Halo " . self::$angka++ . " kali.<br>";
    }
}

echo contohstatic::$angka;
echo "<br>";
echo contohstatic::haloo();
echo "<br>";
echo contohstatic::haloo();
echo "<hr>"

?> <h1>static</h1> <?php

$ob = new contohstatic;
echo $ob->haloo();
echo $ob->haloo();
echo $ob->haloo();
echo "<hr>";

$ob2 = new contohstatic;
echo $ob2->haloo();
echo $ob->haloo();
echo $ob->haloo();
echo "<hr>";

?> <h1>oop</h1> <?php
class contoh {

    public $int = 1;
    public function halo() {
        return "Halo " . $this->int++ . " kali. <br>"; 
    }
}
$obj = new contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
