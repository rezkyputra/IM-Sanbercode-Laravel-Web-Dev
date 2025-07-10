<?php
require_once('Car.php');
require_once('SportCar.php');

$Xenia = new Car("Xenia");
echo "Merk Kendaraan : " . $Xenia->merk . "<br>";
echo "Jumlah Roda Kendaraan : " . $Xenia->roda . "<br>";
echo "Bahan Bakar Kendaraan : " . $Xenia->bahanBakar . "<br>";

echo "==============================<br>";


$Tesla = new SportCar("Tesla");
echo "Merk Kendaraan : " . $Tesla->merk . "<br>";
echo "Jumlah Roda Kendaraan : " . $Tesla->roda . "<br>";
echo "Bahan Bakar Kendaraan : " . $Tesla->bahanBakar . "<br>";
echo $Tesla->jalan();


?>