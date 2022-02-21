<?php 
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





?>