<?php
class Account{
    public $pemilik;
    public $nomor;
    public $saldo;
    

    function __construct($nomor,$saldo){
        $this->nomor = $nomor;
        $this->saldo = $saldo;
    }

    public function deposit($uang){
       $this->saldo = $this->saldo - $uang; 
    }

    public function witdrawl($uang){
        $this->saldo = $this->saldo - $uang;
    }
    
    public function cetak(){
        echo 'Nomor Account : '.$this->nomor;
        echo '<br/> Saldo : '.$this->saldo;
    }
}
?>