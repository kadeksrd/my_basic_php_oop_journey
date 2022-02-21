<?php 


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


?>