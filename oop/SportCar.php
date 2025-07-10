<?php
require_once("Car.php");

class SportCar extends Car
{
    public $bahanBakar = "Listrik";

    public function jalan(){
        return "Mobil Sedang Berjalan <br> <br>";
    }
}

?>