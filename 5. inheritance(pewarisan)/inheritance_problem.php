<?php


// game : Uncharten | Neil Druckman, Sony Computer (Rp. 25.000) - 50 jam.

class Produk{
    
    public  $tipe,
            $judul,
            $pembuat,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain;
           
        

    public function __construct($tipe,$judul,$pembuat,$penerbit,$harga,$jmlHalaman,$waktuMain){
        $this->tipe = $tipe;
        $this->judul = $judul;
        $this->pembuat = $pembuat;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    
    }
    public function label(){
        return "$this->pembuat, $this->penerbit";
    }

    public function getInfo(){
        // komik : naruto | Mashashi kishimmoto, Shonen Jump (Rp.30.000) - 100 halaman
        $str = " <b>{$this->tipe}</b> : <br> JUDUL: {$this->judul} <br> LABEL : {$this->label()} <br> HARGA: (Rp. {$this->harga})";
        if($this -> tipe == "KOMIK"){
            $str .= "  {$this->jmlHalaman} Halaman.";
        }
        else if($this->tipe == "GAME"){
            $str .= "<br> Wakltu Main : ~{$this->waktuMain} Jam.";
        }
        
        return $str;
    }
}



// class Naruto extends Produk{
//     public $halaman;
//     public function __construct($judul,$pembuat,$penerbit,$harga,$halaman){
//         $this->judul = $judul;
//         $this->pembuat = $pembuat;
//         $this->penerbit = $penerbit;
//         $this->harga = $harga;
//         $this->halaman =$halaman;
//     }
// }

// object
$komik = new Produk("KOMIK","Naruto","Mashashi kishimmoto","Shonen Jump",30000,100,0);
$game = new  Produk ("GAME", "GTA V", "DAN HOUSTER", "ROCKSTAR GAME", 700000, 0, 3);
echo $komik ->getinfo();
echo $game ->getinfo();