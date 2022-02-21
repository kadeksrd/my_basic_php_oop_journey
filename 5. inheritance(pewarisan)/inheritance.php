<?php 

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
        $str = " <b>{$this->tipe}</b> : 
        <br> JUDUL: {$this->judul} 
        <br> LABEL : {$this->label()} 
        <br> HARGA: (Rp. {$this->harga})";
       
        return $str;
    }
}



class komik extends Produk{
        public function getInfoKomik(){
            $str = " 
            {$this->getInfo()},
            <br> Jumlah Halaman : {$this->jmlHalaman} Halaman.";
            // untuk mempermudah agar tidak nulis lagi panggil method di class dengna $this dengan syarat nama method child berbeda
            return $str;
        }
}


class game extends Produk{
    public function getInfo(){
        $str = "<b>{$this->tipe}</b> : 
        <br> JUDUL: {$this->judul} 
        <br> LABEL : {$this->label()} 
        <br> HARGA: (Rp. {$this->harga})
        <br> Waktu Main : {$this->waktuMain} jam.";
        return $str;
    }


}
// object
$komik = new komik("KOMIK","Naruto","Mashashi kishimmoto","Shonen Jump",30000,100,0);
$game = new  game ("GAME", "GTA V", "DAN HOUSTER", "ROCKSTAR GAME", 700000, 0, 3);
echo $komik ->getInfoKomik();
echo "<br><br>";
echo $game ->getInfo();

/*
cara menulis inhheritance 
class nama_child extends nama_class/nam_parent{

aturan inheratance / warisan 
1. semua method bisa dipanggi kembali/digunakan 
2. semua property bisa di panggil kembali/digunakan
3. method yang ada tidak bisa dipanggil this karena nanti terjadinya looping cara atasinya pakai nama_method baru di atasnya


}


*/

?>