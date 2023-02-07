<?php

class komik extends Produk implements infoproduk {
    public $jmlhalaman;

    public function __construct($judul = "judul",
    $penulis = "penulis" , $penerbit = "penerbit", 
    $harga = 0, $jmlhalaman = 0 ) {

        parent::__construct( $judul ,
        $penulis  , $penerbit , 
        $harga );

        $this->jmlhalaman = $jmlhalaman;
    }
    public function getinfo() {
        // komik : naruto | masasi kisimoto, shonen jump (Rp.30000) -100 halaman
        $str = "{$this->judul} | {$this->getlabel()}  (Rp. {$this->harga})";
    
        return $str;
     }
   
    public function getinfoproduk()
    {
        $str = "komik :" . $this->getinfo() ."  - {$this->jmlhalaman} Halaman.";
        return $str;
        
    }
}
