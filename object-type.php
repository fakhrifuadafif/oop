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
        return "$this->penulis, $this->penerbit,";
    }
    
 }

 class cetakinfoproduk {
    public function cetak (Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
        return $str;
    }
 }



// alur pruduct>__construct>getLabel>echo

$produk1 = new Produk("Naruto", "masasi kisimoto", "shoen jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckman", "sony computer", 25000 );


echo "Komik:" . $produk1->getLabel();
echo "<br>";
echo "Game :" . $produk2->getLabel();
echo "<br>";
$infoproduk1 = new cetakinfoproduk();
echo $infoproduk1->cetak($produk1);

var_dump($produk1);


