<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contoh Soal Looping</h1>
    <?php
    echo "<h3>Contoh Soal 1</h3>";

    echo "<h4>Looping 1</h4>";
    for($i=1; $i<=19; $i+=2){
        echo $i . " - Angka Ganjil <br>";
    }
    echo "<h4>Looping 2</h4>";


    for($a=19; $a>=1; $a-=2){
        echo $a . " - Angka Ganjil <br>";
    }

    echo "<h3>Contoh Soal 2</h3>";
    $biodata = [
        ["001", "Rezky", 27],
        ["002", "Budi", 22],
        ["003", "Ardit", 25],
        ["004", "Ayu", 31],
        ["005", "Radit", 40]
    ];

    foreach($biodata as $bio){
        $tampung = [
            "id" => $bio[0],
            "nama" => $bio[1],
            "usia" => $bio[2]
        ];

        print_r($tampung);
        echo "<br>";
    }

    echo "<h3>Contoh Soal 3</h3>";

    for($k=1; $k<=5; $k++){
        for($j=$k; $j<=5; $j++){
            echo " * ";
        }
        echo "<br>";
    }



    ?>
</body>
</html>