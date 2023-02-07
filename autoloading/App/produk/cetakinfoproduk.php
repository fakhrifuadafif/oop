<?php
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