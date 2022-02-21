<?php 

require_once 'app/init.php';



// $komik = new komik("KOMIK","Naruto","Mashashi kishimmoto","Shonen Jump",30000,100);
// $game = new  game ("GAME", "GTA V", "DAN HOUSTER", "ROCKSTAR GAME", 700000,3);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk ->tambahProduk($komik);
// $cetakProduk ->tambahProduk($game);

// echo $cetakProduk->cetak();
// echo "<hr>";
// new coba();

// insiasi namespace
new App\services\User();
new App\produk\User();


?>