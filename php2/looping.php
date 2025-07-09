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
    echo "<h3>Soal 1</h3>";
    echo "<h4>Looping 1</h4>";

    $i = 1;
    while($i <= 19){
        echo $i . " - Angka Ganjil <br>";
        $i+=2;
    }

    echo "<h4>Looping 2</h4>";
    $a = 19;
    do {
        echo $a . " - Angka Ganjil <br>";
        $a-=2;
    } while ($a >= 1);

    echo "<h3>Soal 2</h3>";

    $angka = [45, 76, 88, 99, 24];

    echo "Angka : " ;
    print_r($angka);
    echo "<br>";

    foreach ($angka as $ang) {
        $item[] = $ang %= 3;
    }


    echo "Sisa bagi 3 : ";
    print_r($item);
    echo "<br>";

    echo "<h3>Soal 3</h3>";
    $biodata = [
        ["001", "Budi", "Laravel"],
        ["002", "Ayu", "Laravel"],
        ["003", "Dwi", "ReactJS"],
        ["004", "Hartono", "Laravel"],
        ["005", "Budi", "ReactJS"],
        ["006", "Ari", "ReactJS"]
    ];

    foreach($biodata as $arrayi){
        $output = [
            "id" => $arrayi[0],
            "nama" => $arrayi[1],
            "kelas" => $arrayi[2]
        ];
        print_r($output);
        echo "<br>";
    }

    echo "<h3>Soal 4</h3>";

    for($k = 1; $k <= 5; $k++){
        for($j = $k; $j <= 5; $j++){
            echo " * ";
        }
        echo "<br>";
    }

    ?>
</body>
</html>