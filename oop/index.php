<?php
require_once("Car.php");
require_once("SportCar.php");

$avanza = new Car("avanza");

echo "Merk Kendaraan : " . $avanza->merk . "<br>";
echo "Jumlah Roda Kendaraan : " . $avanza->roda . "<br>";
echo "Jumlah Spion Kendaraan : " . $avanza->spion . "<br>";
echo "Bahan Bakar Kendaraan : " . $avanza->bahanBakar . "<br>";

echo "----------------------------<br>";

$tesla = new SportCar("tesla");
echo "Merk Kendaraan : " . $tesla->merk . "<br>";
echo "Jumlah Roda Kendaraan : " . $tesla->roda . "<br>";
echo "Jumlah Spion Kendaraan : " . $tesla->spion . "<br>";
echo "Bahan Bakar Kendaraan : " . $tesla->bahanBakar . "<br>";
echo $tesla->jalan();
?>