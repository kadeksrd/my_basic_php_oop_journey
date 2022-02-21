<?php 

class Produk{
    
    // accesbillity
    public  $tipe,
            $judul,
            $pembuat,
            $penerbit;
            
    protected $diskon;
           
    private $harga;
           
        

    public function __construct($tipe,$judul,$pembuat,$penerbit,$harga){
        $this->tipe = $tipe;
        $this->judul = $judul;
        $this->pembuat = $pembuat;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
       
    
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

    
    public function getPrice(){
        return $this->harga = ($this->harga -$this->harga*= $this->diskon/100);
    }

   

    
}



class komik extends Produk{
    
    
    // property
   
    public $jmlhHalaman;
    
    public function __construct($tipe,$judul,$pembuat,$penerbit,$harga,$jmlhHalaman){
        
        parent::__construct($tipe,$judul,$pembuat,$penerbit,$harga);
        $this->jmlhHalaman = $jmlhHalaman;

    
    }  

    
}


class game extends Produk{

    public $waktuMain;
    
    public function __construct($tipe,$judul,$pembuat,$penerbit,$harga,$waktuMain){
        
        parent::__construct($tipe,$judul,$pembuat,$penerbit,$harga);
        $this->waktuMain = $waktuMain;

    
    }  

    public function getInfo(){
        $str = parent::getInfo()."
        <br> Waktu Main : {$this->waktuMain} jam.";
        return $str;
    }

    
    public function getDiskon($diskon){
        $this->diskon = $diskon;
    }
    

}
// object
$komik = new komik("KOMIK","Naruto","Mashashi kishimmoto","Shonen Jump",30000,100);
$game = new  game ("GAME", "GTA V", "DAN HOUSTER", "ROCKSTAR GAME", 700000,3);
echo $komik ->getInfo();
echo "<br><br>";
echo $game ->getInfo();
echo "<hr>";

// visibitly
$game->getDiskon(50);
echo $game->getPrice();


/*

accesbillty :

private : hanya bisa di gunakan di class aja tapi tidak bisa di akses oleh childnya
protected : bisa digunakan di childnya 
public : bisa di akses semua diluar class


*/

