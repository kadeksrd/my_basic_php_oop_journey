<?php

class bus {
    //property 
    // cara nulis : $nama_property1,nama_property2;
    public $nama_merk,
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
    // constructor
    // cara nulis: 
    /*
    public function __construct($properti1,$propesti2){
        $this->properti1 = $properti1;
        $this->properti2 = $properti2;
    }
    note : -nama properti lokal di constructur __construct($properti1,$propesti2)
           nama  prooperti baru 
            -nama properti yang ada di $this: $this->properti1 = $properti1;
            nama properti sebelumnya 
    
    */
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
// object pada constructor 
// cara nulis nama_variablBaru = new variabel_properti("isi_properti1","isiproperti2");
// note : isi harus sesuai constructor di method ; 
$bus1 = new bus("HINO RN260","PAHALA KENCANA","2012","YOGYAKARTA","Rp.200.000");
$bus2 = new bus("MERCEDES BENZ OH 1626","GUNUNG HARTA","2018","BALI", "Rp. 350.000");
// echo "Tiket Bus : = Merk : $bus1->nama_merk, Tahun Bus : $bus1->tahun_bus, PO : $bus1->nama_PO,Tujuan : $bus1->tujuan,Harga Tiket : $bus1->harga_tiket";
// cara nulis method di object 
    //$variabel_baru ->nama_method(); 
$bus1->print_tiket();
echo "<br>";
echo "<br>";
$bus2->print_tiket();
