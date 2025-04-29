<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello World</h1>

    <?php

    $nama = "Selamat datang di sanbercode";

    echo "Kalimat : " . $nama . "<br>";
    echo "Panjanag Kalimat : " . strlen($nama) . "<br>";
    echo "Jumlah Kata Kalimat : " . str_word_count($nama) . "<br>";

    echo "==================<br>";

    $kalimat2 = "Hello World dunia";

    echo "Kata 1 Kalimat 2 : " . substr($kalimat2,0,5) . "<br>";
    echo "Kata 2 Kalimat 2 : " . substr($kalimat2,6,5) . "<br>";
    echo "Kata 3 Kalimat 2 : " . substr($kalimat2,12) . "<br>";

    echo "==================<br>";

    $kalimat3 = "Vivamus non sodales tellus. Phasellus euismod, magna.";
    echo "Kalimat 3 : " . $kalimat3 . "<br>";
    echo "ubah Kalimat 3 : " . str_replace("magna", "edit", $kalimat3);
    ?>
</body>
</html>