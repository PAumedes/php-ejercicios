<?php
  session_start();
  var_dump($_SESSION);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="session">
      <input type="text" name="nombre" value="" placeholder="nombre">
      <br>
      <button type="submit">Enviar</button>
      <br>
    <!-- <form class="" action="" method="get">
      <input type="text" name="nombre" value="" placeholder="nombre">
      <br>

      <br>
      <button type="submit">Enviar</button>
      <br>

    </form> -->
  </body>
</html>

<?php

// ($_GET) ? var_dump($_GET) : "";
// ($_SERVER) ? var_dump($_SERVER) : "";
// ($_POST) ? var_dump($_POST) : "";
// ($_FILES) ? var_dump($_FILES) : "";
// ($_REQUEST) ? var_dump($_REQUEST) : "";
($_SESSION) ? var_dump($_SESSION) : "";
// ($_COOKIE) ? var_dump($_COOKIE) : "";
// ($GLOBALS) ? var_dump($GLOBALS) : "";
// echo "<br><br>";
//
// var_dump(getAllHeaders());
// echo "<br><br>";
//
// foreach (getAllHeaders() as $key => $value) {
//   echo "$key: $value<br>";
// }
//
// foreach ($_SERVER as $serverKey => $serverValue) {
//   echo "$serverKey: $serverValue<br>";
// }



 ?>
