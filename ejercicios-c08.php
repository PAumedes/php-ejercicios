<?php

if ($_FILES['archivo']['error'] == UPLOAD_ERR_OK) {
    $nombre = $_FILES['archivo']['name'];
    $archivo = $_FILES['archivo']['tmp_name'];
    $ext = pathinfo($nombre, PATHINFO_EXTENSION);

    $miArchivo = dirname(__FILE__);
    $miArchivo .= '/uploads' . $archivo . $ext;

    move_uploaded_file($archivo, $miArchivo);
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
    <form method="post" enctype="multipart/from-data">
        <input type="file" name="archivo">
        <input type="submit" name"enviar">
    </form>
</body>
</html>

<?php


?>


<!-- Crear dos archivos llamados subir.php y bajar.php

bajar.php debe mostrar un link de descarga del archivo subido por el usuario. (recordar atributo download de la etiqueta <a>). -->