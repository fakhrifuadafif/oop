<?php

use Produk as GlobalProduk;

class Produk {
     public $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlhalaman,
            $waktumain;
           

    public function __construct ( $judul = "judul",
     $penulis = "penulis" , $penerbit = "penerbit", 
     $harga = 0, $jmlhalaman = 0, $waktumain = 0, ) 
   {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlhalaman = $jmlhalaman;
        $this->waktumain = $waktumain;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    } 
 
 public function getinfoproduk() {
    // komik : naruto | masasi kisimoto, shonen jump (Rp.30000) -100 halaman
    $str = "komik : {$this->judul} | 
    {$this->getlabel()}  (Rp. {$this->harga})";


    return $str;
 }
}


class game extends Produk{
    public function getinfoproduk()
    {
        $str = "game : {$this->judul} | 
        {$this->getlabel()}  (Rp. {$this->harga}) - 
        {$this->waktumain} Jam.";
        return $str;
    }
}
class komik extends Produk{
    public function getinfoproduk()
    {
        $str = "komik : {$this->judul} | 
        {$this->getlabel()}  (Rp. {$this->harga}) - {$this->jmlhalaman} Halaman.";
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

$produk1 = new komik("Naruto", "masasi kisimoto", "shoen jump", 30000, 100, 0);
$produk2 = new game("Uncharted", "Neil Druckman", "sony computer", 25000, 0, 50);

// Komik:masasi kisimoto, shoen jump,
// Game :Neil Druckman, sony computer,
// Naruto | masasi kisimoto, shoen jump, (Rp.30000)

echo $produk1->getinfoproduk();
echo "<br>";
echo $produk2->getinfoproduk();

var_dump( $produk2);
var_dump( $produk1);
?>