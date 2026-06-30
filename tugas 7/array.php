<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contoh Soal Array</h1>
    <?php
    echo "<h3>Contoh Soal 1 </h3>";

    $peserta = ["Budi", "Adi", "Rudi", "Ridwan", "Supri"];
    print_r($peserta);

    echo "<h3>Contoh Soal 2 </h3>";

    echo "Total Peserta : " . count($peserta);
    echo "<ol>";
    echo "<li>" . $peserta[0] . "</li>";
    echo "<li>" . $peserta[1] . "</li>";
    echo "<li>" . $peserta[2] . "</li>";
    echo "<li>" . $peserta[3] . "</li>";
    echo "<li>" . $peserta[4] . "</li>";
    echo "</ol>";

    echo "<h3>Contoh Soal 3 </h3>";

    $bio_trainer = [
        ["id" => "001", "name" => "Budi", "age" => 27],
        ["id" => "002", "name" => "Ardit", "age" => 30],
        ["id" => "003", "name" => "Dwi", "age" => 31],
        ["id" => "004", "name" => "Ayu", "age" =>40]
    ];

    echo "<pre>";
    print_r($bio_trainer);
    echo "</pre>";
    ?>
</body>
</html>