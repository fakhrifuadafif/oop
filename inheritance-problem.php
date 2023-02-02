<?php

class Produk {
     public $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlhalaman,
            $waktumain,
            $tipe;

    public function __construct ( $judul = "judul",
     $penulis = "penulis" , $penerbit = "penerbit", 
     $harga = 0, $jmlhalaman = 0, $waktumain = 0, $tipe) 
   {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlhalaman = $jmlhalaman;
        $this->waktumain = $waktumain;
        $this->tipe = $tipe;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    } 
 
 public function getinfolengkap() {
    // komik : naruto | masasi kisimoto, shonen jump (Rp.30000) -100 halaman
    $str = "{$this->tipe} : {$this->judul} | 
    {$this->getlabel()}  (Rp. {$this->harga})";

    //  - {$this->jmlahalaman}

    if ( $this->tipe == "komik" ){
         $str .= " - {$this->jmlhalaman} Halaman.";
    }else if( $this->tipe == "game" ) {
         $str .= " ~ {$this->waktumain} Jam.";
    }
    return $str;
 }
}

 class cetakinfoproduk {
    public function cetak (Produk $produk){
        $str = "{$produk->judul} | 
        {$produk->getLabel()} (Rp.{$produk->harga})";

        return $str;
        
    }
 }



// alur pruduct>__construct>getLabel>echo

$produk1 = new Produk("Naruto", "masasi kisimoto", "shoen jump", 30000, 100, 0, "komik");
$produk2 = new Produk("Uncharted", "Neil Druckman", "sony computer", 25000, 0, 50, "game");

// Komik:masasi kisimoto, shoen jump,
// Game :Neil Druckman, sony computer,
// Naruto | masasi kisimoto, shoen jump, (Rp.30000)

echo $produk1->getinfolengkap();
echo "<br>";
echo $produk2->getinfolengkap();

var_dump( $produk2);
var_dump( $produk1);
?>