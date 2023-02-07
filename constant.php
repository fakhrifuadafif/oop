<?php
// constat mengunakan difine
define('NAMA','Fakhri Fuad Afif');
echo NAMA;
echo "<br>";
echo "<hr>";
// constat mengunakan const
const UMUR = 32;
echo UMUR;
// perbedaan define tidak bisa masuk ke kelas sedangkan const bisa
echo "<hr>";
class Coba {
    const NAME = 'Fakhri Fuad Afif';
}
echo coba::NAME;
echo "<hr>";
// Magic constant
// __LINE__ (baris constant ditulis)
echo __LINE__;
echo "<hr>";
// __FILE__ (Alamat file)
echo __FILE__;
echo "<hr>";
// __DIR__  ( dierktori file)
echo __DIR__;
echo "<hr>";
// __FUNCTION__ ( function)
function coba(){
    return __FUNCTION__;
}
echo coba();
echo "<hr>";
// __CLASS__ (class)

class Coba1 {
    public $kelas = __CLASS__;
}
$obj = new Coba1;
echo $obj->kelas;
echo "<hr>";
// __TRAIT__
// __METHOD__
// __NAMESPACE__






?>