<?php

var_dump($_COOKIE);

?>
// COOKIES

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="email">
        <br><br>
        <input type="text" name="password">
        <input type="submit">
    </form>
</body>
</html>



    <!-- Crear un archivo que muestre al usuario un formulario con colores para elegir (podemos usar un select para ello). Una vez que el usuario selecciona ese color y tras dar submit, la página debe recargarse y el fondo de la misma debe ser del color elegido. Ese color debe mantenerse a través de la navegación. Si el usuario cierra el navegador y vuelve a abrir la página, el color de fondo de la misma deberá ser el elegido previamente.

    Implementar una opción para borrar la selección del usuario y volver al valor default de color de fondo. -->