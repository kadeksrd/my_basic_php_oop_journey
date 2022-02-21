<?php

class bus {
    //property 
    // cara nulis : $nama_property1,nama_property2;
    public $nama_merk = "DEFAULT",
            $nama_PO,
            $tahun_bus,
            $tujuan,
            $harga_tiket; 

    // method : function di dalam class
    public function print_tiket(){
        echo "Tujuan : $this->tujuan,<br/> Nama PO BUS :$this->nama_PO, <br/>Harga Tiket: $this->harga_tiket <br>";
        echo "MERK BUS : $this->nama_merk,<br> Tahun Bus:  $this->tahun_bus";
        // $this : menunjukan masih dalam bagian class 
        // -> nama_property : manggil property yang tersedia
    }
    public function print(){
        echo "Hello world";
    }


}
$bus1 = new bus();
// pengambilan object dari kelas adalah dengan menambahkan 
// variabel_baru  ->nama_property/methodnya = "isi_property"
$bus1->nama_merk = "HINO";
$bus1->nama_PO = "PAHALA KENCANA";
$bus1->tahun_bus = "2012";
$bus1->tujuan = "YOGYAKARTA";
$bus1->harga_tiket = "Rp. 200.000";

// echo "Tiket Bus : = Merk : $bus1->nama_merk, Tahun Bus : $bus1->tahun_bus, PO : $bus1->nama_PO,Tujuan : $bus1->tujuan,Harga Tiket : $bus1->harga_tiket";
// cara nulis method di object 
    //$variabel_baru ->nama_method(); 
$bus1->print_tiket();

