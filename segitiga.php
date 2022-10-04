<?php 
 require_once "bangundatar.php";
 class Segitiga extends BangunDatar
 {
    public $alas; 
    public $tinggi;
    public $sisi;

    public function __construct($alas, $tinggi, $sisi){
    $this-> alas = $alas;
    $this-> tinggi = $tinggi;
    }
     public function namaBidang()
    {
        $nama="Segitiga";
        echo $nama;
    }
    public function luasBidang()
    {
        $luas= $this->alas * $this->tinggi / 2;
        echo $luas;
    }

    public function kelilingBidang()
    {
        $keliling= $this-> sisi * 3;
        echo $keliling; 

    }
    public function keterangan()
    {
        echo '
        Alas : '.$this->alas.'
        <br>
        Tinggi : '.$this->tinggi.'
        <br>
        Sisi : '.$this->sisi.'        
        ';
    }
 }


 ?>