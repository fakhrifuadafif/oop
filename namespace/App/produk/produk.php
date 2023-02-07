<?php
abstract class Produk {

protected $judul,
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

abstract public function getinfo();

}