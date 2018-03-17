<?php
    $nombreCelu = ['iPhone X', 'Samsung 8', 'Moto Z'];
    $imgCelu = [
        'https://images-na.ssl-images-amazon.com/images/I/61lMn0%2BjtRL._SL1000_.jpg',
        'https://images-na.ssl-images-amazon.com/images/I/61lMn0%2BjtRL._SL1000_.jpg',
        'https://images-na.ssl-images-amazon.com/images/I/61lMn0%2BjtRL._SL1000_.jpg'
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<pre>";
        var_dump($_GET);
    ?>
    <?php if (isset($_GET['idCel'])): ?>
        <h2><?=$nombreCelu[$_GET['idCel']]?></h2>
</body>
</html>