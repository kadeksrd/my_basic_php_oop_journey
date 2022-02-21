<?php 

interface InfoProduk{
    public function getInfo();
}

abstract class Produk{
    
    // visibillity`
    private $tipe,
            $judul,
            $pembuat,
            $penerbit,        
            $diskon,  
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

   
    public function getInfoProduk(){
        // komik : naruto | Mashashi kishimmoto, Shonen Jump (Rp.30.000) - 100 halaman
        $str = " <b>{$this->tipe}</b> : 
        <br> JUDUL: {$this->judul} 
        <br> LABEL : {$this->label()} 
        <br> HARGA: (Rp. {$this->harga})";
       
        return $str;
    }


    // getter 
        //get tipe
        public function gettipe(){
            return $this->tipe;
        } 
        // get judul
        public function getjudul(){
            return $this->judul;
        }
        
        // get pembuat
        public function getpembuat(){
            return $this->pembuat;
        }
        // get penerbit
        public function getpenerbit(){
            return $this->penerbit;
        }
        // get harga
        public function getharga(){
            return $this->harga = ($this->harga -$this->harga*= $this->diskon/100);
        }
     
    
   
    // setter 
        // set judul
        public function setjudul($judul){
            // buat eror kalo bukan string
            if(!is_string($judul)){
                throw new Exception("judul kudu string!!!");
            }
            return $this->judul = $judul;
        }
         // set pembuat
        public function setpembuat($pembuat){
            // buat eror kalo bukan string
            if(!is_string($pembuat)){
                throw new Exception("pembuat kudu string!!!");
            }
            return $this->pembuat = $pembuat;
        }
        // set penerbit
        public function setpenerbit($penerbit){
            // buat eror kalo bukan string
            if(!is_string($penerbit)){
                throw new Exception("penerbit kudu string!!!");
            }
            return $this->penerbit = $penerbit;
        }
        // set harga
        public function setharga($harga){
            // buat eror kalo bukan string
            if(!is_int($harga)){
                throw new Exception("harga kudu interger!!!");
            }
            return $this->harga = $harga;
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

class CetakInfoProduk{
    // buat produk banyak
    public $daftarProduk = array();
    
    public function tambahProduk(Produk $produk){
        $this->daftarProduk[] = $produk;

    }

    public function cetak(){
       $str = "DAFTAR PRODUK : <br>";
        //loop isinya
        
        foreach ($this->daftarProduk as $dP){
            $str.="- {$dP->getInfo()} <br>";
        }
        
        return $str;
    }
}

// object
$komik = new komik("KOMIK","Naruto","Mashashi kishimmoto","Shonen Jump",30000,100);
$game = new  game ("GAME", "GTA V", "DAN HOUSTER", "ROCKSTAR GAME", 700000,3);

$cetakProduk = new CetakInfoProduk();
$cetakProduk ->tambahProduk($komik);
$cetakProduk ->tambahProduk($game);

echo $cetakProduk->cetak();

/*
interface 

membuat sebuah method pada sebuah clas yang nantinya akan diisi oleh class dibawahnya/childnya

syarat pembuatannya : 
1. class harus bentuk interface bukan abstract 

cara nulis :

// pada class
interface nama_interface {

    public nama_method();

}

// pada class bawahannya / child
class nama_child implements nama_interface{
        public nama_method(){
            return "Hello world";
        }


}

pada object 

$obj1 = new nama_child();

echo nama_child->nama_method();

*/