<?php

class Produk {
     public $judul,
            $penulis,
            $penerbit,
            $harga;

    public function __construct ( $judul = "judul",  $penulis = "penulis" , $penerbit = "penerbit", $harga = 0) 
   {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit, $this->harga";
    }
    
 }
// alur pruduct>__construct>getLabel>echo

$produk1 = new Produk("Naruto", "masasi kisimoto", "shoen jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckman", "sony computer", 25000 );
$produk3 = new Produk("Dragonball");

echo "Komik:" . $produk1->getLabel();
echo "<br>";
echo "Game :" . $produk2->getLabel();
echo "<br>";
echo "anime:" . $produk3->getLabel();


