<?php

if ($_FILES["archivo"]["error"] === UPLOAD_ERR_OK) {
    $nombre = $_FILES['archivo']['name'];
    $archivo = $_FILES['archivo']['tmp_name'];
    $ext = pathinfo($nombre, PATHINFO_EXTENSION);

    $miArchivo = dirname(__FILE__);
    $miArchivo = $miArchivo . '/uploads/' . $_POST['userID'] . "." . $ext;

    if (glob($miArchivo)){
        echo "El archivo ya existe";
    } else {
        move_uploaded_file($archivo, $miArchivo);
        echo "El archivo se subió satisfactoriamente";
    }
}
?>
