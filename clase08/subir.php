<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data" action="validar.php">
        Ingrese su nombre de Usuario<input type="text" name="userID">
        Seleccione su foto de perfil<input type="file" name="archivo">
        <input type="submit" name="enviar">
    </form>
</body>
</html>