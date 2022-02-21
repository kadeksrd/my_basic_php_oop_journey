<?php 

class contoh {
    public static $angka = 1,
                $nama = "saatttya";
    
    public static function halo(){
        return "hallo bang".self::$nama." ".self::$angka++." kali <br>";
    }

}

// object 
$contoh1 = new contoh();
echo $contoh1->halo();
echo $contoh1->halo();
echo $contoh1->halo();
echo $contoh1->halo();

echo "<hr>";

$contoh2 = new contoh();
echo $contoh2->halo();
echo $contoh2->halo();
echo $contoh2->halo();
echo $contoh2->halo();

echo "<hr>";

echo contoh::halo();
echo contoh::halo();
echo contoh::halo();
echo contoh::halo();

/*
static keyword 
membuat object tanpa menggunakan arrow dan new object;

cara penulisan awal 

class contoh {
    // penulisan properti
    public static $angka = 1,
                  $nama = "saatttya";
    // penulisan method
    public static function halo(){
        return "hallo bang".self::$nama." ".self::$angka++." kali <br>";
    }

}
// penulisan object
echo contoh::halo();


note : 

cara pakai this pad static :
self::$nama_property

kalo pakai this sperti ini : 
$this->nama_property

cara panggil object pada static 
nama_class::nama_method()/nama_property;

versi object biasa 
ob1 = new nama_class();
nama_class -> nama_method()/nama_property



*/