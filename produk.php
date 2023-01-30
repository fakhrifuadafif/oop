<?php

//jualan produk
//komik
//game

class Produk {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
    }



// $produk1 = new Produk();
// $produk1 -> judul = "naruto";
// var_dump($produk1); 

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahpeoperty = "hahah";
// var_dump($produk2);

$produk3 = New Produk();
$produk3->judul = "Naruto";
$produk3-> penulis = " masasi kisimoto";
$produk3->penerbit = "Shonen jump";
$produk3->harga = 30000;

$produk4 = New Produk();
$produk4->judul = "Naruto";
$produk4-> penulis = " Neil Druckmann";
$produk4->penerbit = "sonny Computer";
$produk4->harga = 25000;

echo "Komik :".$produk3->getLabel();
echo "<br>";
echo "Game :".$produk4->getLabel();

 