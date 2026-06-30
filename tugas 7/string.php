<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contoh String</h1>
    <?php
    echo "<h3>Contoh Soal 1 </h3>";

    $soal1 = "Selamat Datang di Sanbercode";
    echo "Kalimat : " . $soal1 . "<br>";
    echo "Panjang Kalimat : " . strlen($soal1) . "<br>";
    echo "Jumlah Kata Kalimat : " . str_word_count($soal1) . "<br>";

    echo "<h3>Contoh Soal 2 </h3>";

    $soal2 = "Hello World Dunia";
    echo "Kata 1 soal 2 : " . substr($soal2, 0, 5) . "<br>";
    echo "Kata 2 soal 2 : " . substr($soal2, 6, 5) . "<br>";
    echo "Kata 3 soal 2 : " . substr($soal2, 12) . "<br>";

    echo "<h3>Contoh Soal 3 </h3>";

    $soal3 = "Selamat Pagi";
    echo "Kalimat soal 3 : ". $soal3 . "<br>";
    echo "Ganti Kalimat soal 3 : " . str_replace("Pagi", "Sore", $soal3);
    ?>
</body>
</html>