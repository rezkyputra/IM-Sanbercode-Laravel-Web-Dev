<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Belajar PHP String</h1>
    <?php
    echo "<h3>Contoh soal 1</h3>";

    $kata1 = "Hello World Dunia";

    echo "Kalimat 1 : " . $kata1 . "<br>";
    echo "Panjang Kalimat 1 : ". strlen($kata1) . "<br>";
    echo "Jumlah Kata Kalimat 1 : " . str_word_count($kata1) . "<br>";

    echo "<h3>Contoh soal 2</h3>";

    $kata2 = "Lorem Ipsum Check";

    echo "Kata 1 Kalimat 2 : " . substr($kata2, 0,5) . "<br>";
    echo "Kata 2 Kalimat 2 : " . substr($kata2, 6,5) . "<br>";
    echo "Kata 3 Kalimat 2 : " . substr($kata2, 12) . "<br>";

    echo "<h3>Contoh soal 3</h3>";

    $kata3 = "Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec ipsum porttitor nulla et lacus malesuada, ac ipsum viverra enim posuere.";

    echo "Kalimat 3 : " . $kata3 . "<br>";
    echo "New Kalimat 3 : " . str_replace("ipsum", "test", $kata3);
    ?>

</body>
</html>