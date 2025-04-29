<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Latihan Array</h1>
    <?php
    $trainer = ["Rezky", "budi", "ayu", "Dewi", "Ardi"];
    print_r($trainer);
    echo "<br>";

    echo "Total Trainer:" . count($trainer) ."<br>";
    echo "<ol>";
    echo "<li>" . $trainer[0] ."</li>";
    echo "<li>" . $trainer[1] ."</li>";
    echo "<li>" . $trainer[2] ."</li>";
    echo "<li>" . $trainer[3] ."</li>";
    echo "<li>" . $trainer[4] ."</li>";
    echo "</ol>";

    $bioTrainer = [
        ["id" => "001", "nama" => "rezky", "materi" => "Laravel"],
        ["id" => "002", "nama" => "thio", "materi" => "Phyton"],
        ["id" => "003", "nama" => "abdul", "materi" => "ReactJS"],
    ];

    echo "<pre>";
    print_r($bioTrainer);
    echo "</pre>";

    ?>
</body>
</html>