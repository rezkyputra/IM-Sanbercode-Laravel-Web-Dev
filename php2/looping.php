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
    echo "---------------------<br>";
    echo "<h3>Looping  1 </h3>";

    $i = 1;
    // while($i <= 19){
    //     echo "$i - Angka Ganjil <br>";
    //     $i+=2;
    // }
    do {
        echo "$i - Angka Ganjil <br>";
        $i+=2;
    } while ($i <= 19);

    echo "<h3>Looping  2 </h3>";
    for($a = 19; $a >= 1; $a-=2){
        echo "$a - Angka Ganjil <br>";
    }

    echo "---------------------<br>";
    $angka = [40, 65, 74, 87 ,43, 41];

    echo "Angka : ";
    print_r($angka);
    echo "<br>";
    
    echo "Angka sisa bagi 3 : " ;
    foreach($angka as $ang){
        $items[] = $ang %= 3;
    }

    print_r($items);
    echo "<br>";

    echo "---------------------<br>";

    $dataPeserta = [
        ["001", "Budi", "Laravel"],
        ["002", "Ardi", "Laravel"],
        ["003", "Dwi", "ReactJS"],
        ["004", "Ayu", "Phyton"],
        ["005", "Toni", "ReactJS"]
    ];

    foreach($dataPeserta as $dataarray){
        $output = [
            "id" => $dataarray[0],
            "nama" => $dataarray[1],
            "materi" => $dataarray[2]
        ];
        print_r($output);
        echo "<br>";
    }

    echo "---------------------<br>";

    // j = 6

    for($j=1; $j<=5; $j++){
        for($k=$j; $k<=5; $k++){
            echo " * ";
        }
        echo "<br>";
    }

    ?>
</body>
</html>