<?php

require_once 'App/init.php';

// $produk1 = new komik("Naruto", "masasi kisimoto", "shoen jump", 30000, 100);
// $produk2 = new game("Uncharted", "Neil Druckman", "sony computer", 25000, 50);

// $cetakproduk = new cetakinfoproduk();
// $cetakproduk->tambahproduk( $produk1);
// $cetakproduk->tambahproduk( $produk2);
// echo $cetakproduk->cetak();

// echo "<hr>";

// alias
use App\service\user as serviceuser;
use App\produk\user as produkuser;

new serviceuser();
echo "<hr>";

new produkuser();