<?php
class Car
{
    public $merk;
    public $roda = 4;
    public $bahanBakar = "bensin";

    public function __construct($str){
        $this->merk = $str;
    }
}

?>