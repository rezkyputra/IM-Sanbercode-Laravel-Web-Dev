<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Belajar String</h1>
    <?php
    echo "<h3>Contoh Soal String 1</h3>";

    $kalimat="Selamat Datang di Sanbercode";
    echo "Kalimat 1 : " . $kalimat . "<br>";
    echo "Jumlah Karakter Kalimat 1 : ". strlen($kalimat). "<br>";
    echo "Jumlah Kata Kalimat 1 : ". str_word_count($kalimat) . "<br>";

    echo "<h3>Contoh Soal String 2</h3>";
    $kalimat2="Hello World";
    echo "Kata 1 kalimat 2 : ". substr($kalimat2, 0, 5) . "<br>";
    echo "Kata 2 kalimat 2 : ". substr($kalimat2, 6 ) . "<br>";

    echo "<h3>Contoh Soal String 3</h3>";
    $kalimat3="Duis quis venenatis ipsum. Donec quis ante sem. Vivamus justo magna, convallis eget diam non, pulvinar feugiat urna. Morbi sit.";

    echo "Kalimat 3 : ". $kalimat3 ."<br>";
    echo "Kalimat 3 ubah : ". str_replace("ipsum", "sum", $kalimat3) ."<br>";
    ?>
</body>
</html>