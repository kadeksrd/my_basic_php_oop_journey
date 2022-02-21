<?php 

class game extends Produk implements InfoProduk{

    public $waktuMain;
    
    public function __construct($tipe,$judul,$pembuat,$penerbit,$harga,$waktuMain){
        
        parent::__construct($tipe,$judul,$pembuat,$penerbit,$harga);
        $this->waktuMain = $waktuMain;

    
    }  

    public function getInfo(){
        $str = $this->getInfoProduk()."
        <br> Waktu Main : {$this->waktuMain} jam.";
        return $str;
    }

    // getter diskon 
    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }
    // setter diskon
    public function getDiskon(){
        return "$this->diskon %";
    }
    
}


?>