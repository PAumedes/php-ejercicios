<?php



    if ($_POST) {
        if ($_POST['action'] == 'change') {
            $colorfondo = $_POST['color'];
        } elseif ($_POST['action'] == 'reset'){
            $colorfondo = 'white';
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Colores</title>
</head>
<body style="background-color:<?=$colorfondo?>">
    <form action="" method="post">
        <select name="color">
            <option value="red">Rojo</option>
            <option value="blue">Azul</option>
            <option value="green">Verde</option>
        </select> 
        <button type="submit" name="action" value="change">Cambiar de color</button>
        <button type="submit" name="action" value="reset">Resetear</button>
    </form>
</body>
</html>