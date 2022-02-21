<?php 

// cara const pakai define 
// define ('nama_variabel', 'isinyaa')
define('NAMA', 'KADEK SURYA');
echo NAMA;

echo "<br>";
// cara const pakai const
const UMUR = 21;
echo UMUR;

// menggunakan class 
// harus menggunakan const agar ga erorr
class obj{
    const NAMA = "<br>komang";
}

echo obj::NAMA;
echo "<hr>";
/*
MAGIC CONSTANT
__LINE__ : untuk menampilkan line di code
__FILE__ : untuk menmpilkn location const filenya
__DIR__: untuk directory file 
__FUNCTION__: untuk mengetahui nama function
__CLASS__: untuk mengetahui nama class
__TRAIT__: 
__METHOD__:
__NAMESPACE__:




*/

?>