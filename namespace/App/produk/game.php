<?php
class game extends Produk implements infoproduk {
    public $waktumain;

    public function __construct($judul = "judul",
    $penulis = "penulis" , $penerbit = "penerbit", 
    $harga = 0, $waktumain = 0) {
    parent::__construct($judul ,
    $penulis , $penerbit , 
    $harga);
        
        $this->waktumain = $waktumain;
    }
    public function getinfo() {
        // komik : naruto | masasi kisimoto, shonen jump (Rp.30000) -100 halaman
        $str = "{$this->judul} | {$this->getlabel()}  (Rp. {$this->harga})";
    
        return $str;
     }


    public function getinfoproduk()
    {
        $str = "game : " . $this->getinfo() ." - {$this->waktumain} Jam.";
        return $str;
    }
}

