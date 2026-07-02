<?php

class Car {
    public $roda = 4;
    public $spion = 2;
    public $bahanBakar = "bensin";
    public $merk;

    public function __construct($nama){
        $this->merk = $nama;
    }
}
?>