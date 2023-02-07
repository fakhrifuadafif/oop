<?php

 use cetakinfoproduk as GlobalCetakinfoproduk;
 use Produk as GlobalProduk;

abstract class Produk {

    private $judul,
            $penulis,
            $penerbit,
            $diskon = 0,
            $harga;

    // protected bisa diakses di parent class dan child class


    public function __construct ( $judul = "judul",
     $penulis = "penulis" , $penerbit = "penerbit", 
     $harga = 0 ) 
   {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setjudul($judul) {
        if( !is_string($judul)) {
            throw new Exception("judul harus string");
        }
        $this->judul = $judul;
    }

    public function getjudul(){
        return $this->judul;
    }
    public function setpenulis($penulis){
        $this->penulis = $penulis;
    }

    public function getpenulis(){
        return $this->penulis;
    }

    public function setpenerbit($penerbit){
        $this->penerbit = $penerbit;
    }
    public function getpenerbit(){
        return $this->penerbit;
    }

    public function setharga($harga) {
        $this->harga = $harga;
    }
    public function getharga() {
        return $this->harga -( $this->harga * $this->diskon / 100);
    }

    public function setdiskon( $diskon ) {
        $this->diskon = $diskon;
    }
    public function getdiskon( $diskon) {
        return $this->diskon;
    }
   
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    } 
 
    abstract public function getinfoproduk();

    public function getinfo() {
    // komik : naruto | masasi kisimoto, shonen jump (Rp.30000) -100 halaman
    $str = "{$this->judul} | {$this->getlabel()}  (Rp. {$this->harga})";

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
        $str = "komik :" . $this->getinfo() ."  - {$this->jmlhalaman} Halaman.";
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
        $str = "game : " . $this->getinfo() ." - {$this->waktumain} Jam.";
        return $str;
    }
}



 class cetakinfoproduk {
    public $daftarproduk = array();

    public function tambahproduk( Produk $produk) {
        $this->daftarproduk[] = $produk;
    }
    public function cetak (){
        $str = "DAFTAR PRODUK : <br>";

        foreach( $this->daftarproduk as $p ){
            $str .= "- {$p->getinfoproduk()} <br>";
        }

        return $str;
        
    }
 }



// alur pruduct>__construct>getLabel>echo

$produk1 = new komik("Naruto", "masasi kisimoto", "shoen jump", 30000, 100);
$produk2 = new game("Uncharted", "Neil Druckman", "sony computer", 25000, 50);

$cetakproduk = new GlobalCetakinfoproduk();
$cetakproduk->tambahproduk( $produk1);
$cetakproduk->tambahproduk( $produk2);
echo $cetakproduk->cetak();
