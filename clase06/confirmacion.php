<?php
    if ($_POST['name'] == ''){
        header('Location: register.php');
        exit;
    }
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
    <p>Muchas gracias por registrarte <?=$_POST['name']?>, nos has dicho que tu país de nacimiento es <?=$_POST['paises']?>. Hemos registrado tu email, <?=$_POST['email']?>.</p>
    <?php if (isset($_POST['hobbies'])) : ?>
        <p>Tus pasatiempos son: </p>
        <ul>
            <?php foreach ($_POST['hobbies'] as $hobbie) : ?>
            <li><?=$hobbie?></li>
            <?php endforeach; ?>
        </ul>
    <?php else : ?>
    <p>No has especificado hobbies</p>
    <?php endif; ?>
    <p>¡Gracias!</p>
</body>
</html>