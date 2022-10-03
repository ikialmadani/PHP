<?php 
 require_once "bangundatar.php";
 class PersegiPanjang extends BangunDatar
 {
    public $panjang; 
    public $lebar;

    public function __construct($panjang, $lebar){
    $this-> panjang = $panjang;
    $this-> lebar = $lebar;
    }
     public function namaBidang()
    {
        $nama="Persegi Panjang";
        echo $nama;
    }
    public function luasBidang()
    {
        $luas= $this->panjang * $this->lebar;
        echo $luas;
    }

    public function kelilingBidang()
    {
        $keliling= 2 * ($this-> panjang + $this-> lebar);
        echo $keliling; 

    }
    public function keterangan()
    {
        echo '
        Panjang : '.$this->panjang.'
        <br>
        Lebar : '.$this->lebar.'        
        ';
    }
 }


 ?>