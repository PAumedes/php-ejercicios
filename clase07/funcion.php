<?php

function variable($texto){
    echo "El texto ingresado es "."<b>".$texto."</b><br>";
    echo $textoMD5 = "El texto hasheado por MD5 es igual a "."<b>".md5($texto)."</b><br>";
    echo $textoSHA1 = "El texto hasheado por SHA1 es igual a "."<b>".sha1($texto)."</b><br>";
    echo $textoSHA1 = "El texto hasheado por DEFAULT es igual a "."<b>".password_hash($texto, PASSWORD_DEFAULT)."</b><br>";
    echo $textoSHA1 = "El texto hasheado por BCRYPT es igual a "."<b>".password_hash($texto, PASSWORD_BCRYPT)."</b><br>";
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
    <p>
        <?=variable("hola")?>
    </p>
</body>
</html>
