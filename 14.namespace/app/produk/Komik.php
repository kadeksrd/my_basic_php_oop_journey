<?php 

class komik extends Produk{
    
    
    // property
   
    public $jmlhHalaman;
    
    public function __construct($tipe,$judul,$pembuat,$penerbit,$harga,$jmlhHalaman){
        
        parent::__construct($tipe,$judul,$pembuat,$penerbit,$harga);
        $this->jmlhHalaman = $jmlhHalaman;

    
    }  

    public function getInfo(){
        $str = $this->getInfoProduk()."
        <br> Jumlah Halaman : {$this->jmlhHalaman} jam.";
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