<?php

  $num1 = 9;
  $num2 = 45;

  if ($num1 > $num2){
    echo "$num1 es mayor a $num2";
  } else {
    echo "$num2 es mayor a $num1";
  }

  echo "<br><br>";

  $numRand = rand(1,5);
  var_dump($numRand);
  echo "<br><br>";

  if ($numRand == 3 || $numRand == 5){
    echo "El número random generado es $numRand";
  }

  echo "<br><br>";

  if ($numRand != 3){
    echo "El número NO es 3";
  } else {
    echo $numRand;
  }

  echo "<br><br>";

  $numRand2 = rand(1,100);
  // $numRand2 = 50;
  var_dump($numRand2);
  echo "<br><br>";

  if ($numRand2 > 50){
    echo "El número es mayor a 50";
  } else {
    echo "El número es menor a 50";
  }


  echo "<br><br>";

  $nombreDeUsuario = "admin";
  $claveDeUsuario = "1234";
  var_dump($nombreDeUsuario);
  echo "<br><br>";
  var_dump($claveDeUsuario);
  echo "<br><br>";

  if ($nombreDeUsuario == "admin" && $claveDeUsuario == "1234"){
    echo "¡Bienvenido a tu cuenta!";
  } else if ($nombreDeUsuario == "admin" && $claveDeUsuario != "1234") {
    echo "Tu contraseña es incorrecta";
  } else if ($nombreDeUsuario != "admin" && $claveDeUsuario == "1234"){
    echo "Tu nombre de usuario es incorrecto";
  } else {
      echo "Lo sentimos, hay un error de credenciales";
  }

  echo "<br><br>";

  $edad = 12;
  $casado = true;
  $sexo = "Otro";
  var_dump($edad);
  echo "<br><br>";
  var_dump($casado);
  echo "<br><br>";
  var_dump($sexo);
  echo "<br><br>";

  if (($edad > 18 && $casado == false) || $sexo == "Otro"){
    echo "Bienvenido";
  }

  echo "<br><br>";

  $cantidadDeAlumnos = -100;

  if ($cantidadDeAlumnos) {
    echo "true";
  } else {
    echo "false";
  }

  echo "<br><br>";

  if ($i = 0) {
    echo "true";
  } else {
    echo "false";
  }

  $numero = 3;
  echo "<br><br>";
  var_dump($numero);
  echo $numero % 2 == 0 ? "El número es par" : "El número es impar";
  echo "<br><br>";

  $nombre = "Facu";

  switch ($nombre) {
    case 'Pedro':
      echo "Hola $nombre";
      break;
    case 'Pablo':
      echo "Hola $nombre";
      break;
    case 'Facu':
      echo "Hola $nombre";
      break;
    case 'Chris':
      echo "Hola $nombre";
      break;
    case 'Roberto':
      echo "Hola $nombre";
      break;
    default:
      echo "No hay a quien saludar";
      break;
  }

  echo "<br><br>";

  $colorRemera = "Celeste";

  switch ($colorRemera) {
    case 'Rojo':
    case 'Azul':
    case 'Amarillo':
      echo "El color de la remera es un color primario";
      break;
    default:
      echo "La remera es de color desconocido";
      break;
  }












 ?>
