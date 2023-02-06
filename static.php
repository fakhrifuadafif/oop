<!-- static keyword

member yang terikat class, bukan dengan object

nilai static akan selalu tetap meskipun object di instansiasi berulang kali

membuat code menjadi 'prosedural' 

biasa digunakan untuk membuat fungsi bantuan / helper

atau digunaka di class-class utility pada framework -->

<?php

class contohstatic {
    public static $angka = 1;

    public static function halo() {
        return "Halo " . self::$angka++ . " kali.";
    }
}

echo contohstatic::$angka;
echo "<br>";
echo contohstatic::halo();
echo "<hr>";
echo contohstatic::halo();

echo "<hr>";


class contoh {

    public static $int = 1;
    public function halo() {
        return "Halo " . self::$int++ . " kali. <br>";
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
