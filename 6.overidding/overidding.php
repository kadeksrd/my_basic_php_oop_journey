<?php 

class Produk{
    
    public  $tipe,
            $judul,
            $pembuat,
            $penerbit,
            $harga;
           
        

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
}



class komik extends Produk{
    
    
    // property
   
    public $jmlhHalaman;
    
    public function __construct($tipe,$judul,$pembuat,$penerbit,$harga,$jmlhHalaman){
        
        parent::__construct($tipe,$judul,$pembuat,$penerbit,$harga);
        $this->jmlhHalaman = $jmlhHalaman;

    
    }  

    public function getInfo(){
        $str = parent::getInfo()."
        <br> Jumlah Halaman : {$this->jmlhHalaman} jam.";
        return $str;
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


}
// object
$komik = new komik("KOMIK","Naruto","Mashashi kishimmoto","Shonen Jump",30000,100);
$game = new  game ("GAME", "GTA V", "DAN HOUSTER", "ROCKSTAR GAME", 700000,3);
echo $komik ->getInfo();
echo "<br><br>";
echo $game ->getInfo();

/*
cara menulis overidding :

parent::class_yang_ingin_dipoanggil 
contoh:  parent::getInfo();

cara nulis overidding : pada method getInfo() dalam suatu class 
 $str = parent::getInfo()."
        <br> Waktu Main : {$this->waktuMain} jam.";
        return $str;

cara nulis overidding pada constructor
    public $waktuMain;
    
    public function __construct($tipe,$judul,$pembuat,$penerbit,$harga,$waktuMain)
    {
        parent::__construct($tipe,$judul,$pembuat,$penerbit,$harga);
        $this->waktuMain = $waktuMain;
    }
    
    aturan overidding
    1. ditaruh ketika ingin mengambil data dari class tanpa di buat kembali pada child class
    2. untuk constructor pastikan setelah di overidding datanya ditambah agar hasilnya berbeda dengan parentnya
    3. begitu juga pada method yang lain 
      
}


*/

?>