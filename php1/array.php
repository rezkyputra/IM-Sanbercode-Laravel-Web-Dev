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
    echo "<h3>Contoh Soal Array 1</h3>";
    
    $trainer = ["Rezky", "Budi", "Ardit", "Asep", "Dwi", "Ayu"];

    print_r($trainer);

    echo "<h3>Contoh Soal Array 2</h3>";

    echo "Total Trainer : ".count($trainer);
    echo "<ol>";
    echo "<li>". $trainer[0] ."</li>";
    echo "<li>". $trainer[1] ."</li>";
    echo "<li>". $trainer[2] ."</li>";
    echo "<li>". $trainer[3] ."</li>";
    echo "<li>". $trainer[4] ."</li>";
    echo "<li>". $trainer[5] ."</li>";
    echo "</ol>";

    echo "<h3>Contoh Soal Array 3</h3>";

    $biodataTrainer = [
        ["id" => "001", "name" => "Rezky", "materi"=>"Laravel"],
        ["id" => "002", "name" => "Budi", "materi"=>"ReactJs"],
        ["id" => "003", "name" => "Ardit", "materi"=>"VueJs"],
        ["id" => "004", "name" => "Ayu", "materi"=>"NodeJs"],
        ["id" => "005", "name" => "Dwi", "materi"=>"Golang"],
    ];

    echo "<pre>";
    print_r($biodataTrainer);
    echo "</pre>";
    ?>
</body>
</html>