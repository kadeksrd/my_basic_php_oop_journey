<?php 

// buat manual 
require_once 'produk/InfoProduk.php';
require_once 'produk/Produk.php';
require_once 'produk/Komik.php';
require_once 'produk/Game.php';
require_once 'produk/CetakInfoProduk.php';
require_once 'produk/User.php';
require_once 'services/User.php';

// buat otomatis
    // cara auto loading 
    // spl_autoload_register(function($class){
        
    //     // App/Produk/User = ["App", "Produk", "User"];
    //     $class = explode('\\', $class);
    //     $class = end($class);
    //     require_once __DIR__ .'/produk/'. $class.'.php';
    // })

    // spl_autoload_register(function($class){
    //     $class = explode('\\', $class);
    //     $class = end($class);
    //     require_once __DIR__ .'/services/'. $class.'.php';
    // })


/*
cara kerja fungsi autoloading : 
memanggil class berulang2 (rekursif)

note : makannya untuk buat autoloading nama file harus sama dengan nama filenya 


*/


?>