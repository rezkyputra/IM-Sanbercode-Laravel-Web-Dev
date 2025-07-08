<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Belajar Array</h1>
    <?php
        echo "<h3>Contoh Soal 1</h3>";

        $peserta = ["Budi", "Dwi", "ayu", "Asep"];
        print_r($peserta);

        echo "<h3>Contoh Soal 2</h3>";
        echo "Total Trainer : " . count($peserta) . "<br>";
        echo "<ol>";
        echo "<li>" . $peserta[0] . "</li>";
        echo "<li>" . $peserta[1] . "</li>";
        echo "<li>" . $peserta[2] . "</li>";
        echo "<li>" . $peserta[3] . "</li>";
        echo "</ol>";

        echo "<h3>Contoh Soal 3</h3>";
        $arrayMulti = [
            ["id" => "001", "nama" => "Budi", "kelas" => "Laravel"],
            ["id" => "002", "nama" => "Ayu", "kelas" => "Laravel"],
            ["id" => "003", "nama" => "Ardi", "kelas" => "ReactJS"],
            ["id" => "004", "nama" => "Hasan", "kelas" => "Laravel"],
            ["id" => "004", "nama" => "Dwi", "kelas" => "ReactJS"],
        ];

        echo "<pre>";
        print_r($arrayMulti);
        echo "</pre>";

        echo $arrayMulti[2]["nama"];


    ?>
</body>
</html>