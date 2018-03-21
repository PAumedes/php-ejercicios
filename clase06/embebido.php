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
        $nombre = 'Ana';
        $edad = 30;
        echo "<h2>Hola <em>$nombre</em>, tenés $edad años</h2>";
     ?>
     <h2>Hola <em><?=$nombre?></em>, tenés <?=$edad?> años</h2>

     <?php if ($edad >= 18) : ?>
        <h2 class="title">Hola <em><?=$nombre?></em>, sos mayor</h2>
    <?php else: ?>
        <h2 class="title">Hola <em><?=$nombre?></em>, sos menor</h2>
    <?php endif; ?>
</body>
</html>