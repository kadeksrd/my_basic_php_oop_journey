<?php

class bus {

    public $nama_merk,
            $nama_PO,
            $tahun_bus,
            $tujuan,
            $harga_tiket; 

    public function print_tiket(){
        echo "Tujuan : $this->tujuan,<br/> Nama PO BUS :$this->nama_PO, <br/>Harga Tiket: $this->harga_tiket <br>";
        echo "MERK BUS : $this->nama_merk,<br> Tahun Bus:  $this->tahun_bus";
        
    }
    
    public function __construct($nama_merk,$nama_PO,$tahun_bus,$tujuan,$harga_tiket){
        $this->nama_merk = $nama_merk;
        $this->nama_PO = $nama_PO;
        $this->tahun_bus = $tahun_bus;
        $this->tujuan = $tujuan;
        $this->harga_tiket = $harga_tiket;
    }
    public function print(){
        echo "Hello world";
    }

}

// object type 

class cetak_struk {
    public function print_struk(bus $bus){
        $struk = "NAMA BUS: <b>{$bus->nama_PO}</b><br/>TUJUAN : <b>{$bus->tujuan}</b><br>HARGA : (<b>{$bus->harga_tiket}<b>)";
        return $struk;
    }
// buat fungsi cetak pada kelas baru untuk object type
/*
class nama_class{
    public function nama_fungsi(type_class $parameter){
        $variabel_baru = "
        nama: $parameter->property_nama <br> 
        kelas : $parameter->property_kelas
        ";

        return $variabel_baru;
    }
}
note : type_class : object type agar hanya object 
pada nama class tertentu yang boleh dicetak 

*/
}

$bus1 = new bus("HINO RN260","PAHALA KENCANA","2012","YOGYAKARTA","Rp.200.000");
$bus2 = new bus("MERCEDES BENZ OH 1626","GUNUNG HARTA","2018","BALI", "Rp. 350.000");

// panggil object
/*
$variabel_penentu = new nama_property("nama","kelas");

$variabel_baru = new nama_class();
echo $variabelbaru->nama_fungsi($variabel_penentu);
*/
$struk = new cetak_struk();
echo $struk->print_struk($bus1);
 

/* if($user == $regency){
    $regency = (SELECT FROM regensi where Id ) == (SELECT From provinces == id)
}
*/