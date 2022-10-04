<?php 
require_once "bangundatar.php";
class lingkaran extends Bulat
{
    public $PHI = 3.14 ;
    public $r = 2;

    public function __construct($PHI, $r){
    $this-> PHI = $PHI;
    $this-> JariJari = $r;
    }
    public function namaBidang()
    {
        $nama ="Lingkaran";
        echo $nama;
    }
    public function luasBidang()
    {
        $luas= $this-> PHI * ($this-> JariJari * $this-> JariJari);
        echo $luas;
    }

    public function kelilingBidang()
    {
        $keliling= $this-> PHI * ($this-> JariJari + $this-> JariJari);
        echo $keliling; 

    }
    public function keterangan()
    {
        echo '
        PHI : '.$this->PHI.'
        <br>
        JariJari : '.$this->JariJari.'        
        ';
    }
 }

?>