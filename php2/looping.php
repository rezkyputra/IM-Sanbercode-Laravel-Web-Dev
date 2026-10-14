<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contoh Looping</h1>
    <?php
    echo "<h3>Contoh Soal 1</h3>";
    echo "<p>Looping 1</p>";
    for ($i=1; $i <= 19; $i+=2) { 
        echo "Angka - ". $i . "<br>";
    }
    echo "<p>Looping 2</p>";
    for ($a=19; $a >= 1; $a-=2) { 
        echo "Angka - ". $a . "<br>";
    }

    echo "<h3>Contoh Soal 2</h3>";
    $students = [
        ["001", "budi", "IPA"],
        ["002", "ardi", "IPS"],
        ["003", "arif", "IPA"],
        ["004", "ayu", "IPA"],
        ["005", "ratna", "IPS"],
        ["006", "samuel", "IPA"],
        ["007", "Joseph", "IPS"],
    ]; 

    foreach ($students as $arrStudent) {
        $result = [
            "id" => $arrStudent[0],
            "name" => $arrStudent[1],
            "class" => $arrStudent[2],
        ];
        print_r($result);
        echo "<br>";
    }

    echo "<h3>Contoh Soal 3</h3>";

    for ($row=1; $row <=5 ; $row++) { 
        for ($col=$row; $col <=5 ; $col++) { 
            echo "* ";
        }
        echo "<br>";
    }

    ?>
</body>
</html>