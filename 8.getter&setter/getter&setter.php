<?php 

class Produk{
    
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

    public function getInfo(){
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

    // getter diskon 
    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }
    // setter diskon
    public function getDiskon(){
        return "$this->diskon %";
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
$game->setDiskon(50);
echo $game->getharga();
echo "<hr>";

// getter & setter 

    // cetak judul dengan getter
echo $komik->getjudul();
echo "<br>" ;
    // cetak judul dengan setter
// $komik->judul = "boruto"; // cara biasa 
echo $komik->setjudul("boruto");
echo "<br>";
// get diskon
$game->setDiskon(50);
echo $game->getDiskon();

/*
getter : mengambil variabel dengan mengembalikan variabel, 
ini bisa juga digunakan apabila properti di private
contoh koding : 
// mengambil judul yang di private
 public function getjudul(){
            return $this->judul;
        }

setter: mengeset suatu variabel dengan mengembalikan parameter suatu variabel, 
ini juga bisa mengatur/ mengset properti yang di privarte

contoh koding: 
 public function setjudul($judul){
            return $this->judul = $judul;
        }


*/

