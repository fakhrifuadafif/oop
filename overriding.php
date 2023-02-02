<?php

use Produk as GlobalProduk;

class Produk {
     public $judul,
            $penulis,
            $penerbit,
            $harga;
           

    public function __construct ( $judul = "judul",
     $penulis = "penulis" , $penerbit = "penerbit", 
     $harga = 0 ) 
   {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    } 
 
 public function getinfoproduk() {
    // komik : naruto | masasi kisimoto, shonen jump (Rp.30000) -100 halaman
    $str = "{$this->judul} | 
    {$this->getlabel()}  (Rp. {$this->harga})";


    return $str;
 }
}

class komik extends Produk{
    public $jmlhalaman;

    public function __construct($judul = "judul",
    $penulis = "penulis" , $penerbit = "penerbit", 
    $harga = 0, $jmlhalaman = 0 ) {

        parent::__construct( $judul ,
        $penulis  , $penerbit , 
        $harga );

        $this->jmlhalaman = $jmlhalaman;
    }
    
    public function getinfoproduk()
    {
        $str = "komik :" . parent::getinfoproduk() ."  - {$this->jmlhalaman} Halaman.";
        return $str;
        
    }
}

class game extends Produk{
    public $waktumain;

    public function __construct($judul = "judul",
    $penulis = "penulis" , $penerbit = "penerbit", 
    $harga = 0, $waktumain = 0) {
    parent::__construct($judul ,
    $penulis , $penerbit , 
    $harga);
        
        $this->waktumain = $waktumain;
    }
    public function getinfoproduk()
    {
        $str = "game : " . parent :: getinfoproduk() ." - 
        {$this->waktumain} Jam.";
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

$produk1 = new komik("Naruto", "masasi kisimoto", "shoen jump", 30000, 100);
$produk2 = new game("Uncharted", "Neil Druckman", "sony computer", 25000, 50);

// Komik:masasi kisimoto, shoen jump,
// Game :Neil Druckman, sony computer,
// Naruto | masasi kisimoto, shoen jump, (Rp.30000)

echo $produk1->getinfoproduk();
echo "<br>";
echo $produk2->getinfoproduk();

var_dump( $produk2);
var_dump( $produk1);
?>