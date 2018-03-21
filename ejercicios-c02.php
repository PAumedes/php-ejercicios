<?php

echo "<h1> Ejercicios Clase 02 </h1>";
echo "<br><br>";
echo "<h2> Ejercicio 1 </h2>";
echo "<br>";

// Ejercicio 01

$num1 = 5;
$num2 = 10;

if ($num1 > $num2) {
  echo "El número mayor es $num1";
} else {
  echo "El número mayor es $num2";
};

echo "<br>";

// Ejercicio 02

$random = rand(1,5);
var_dump($random);
if ($random == 3 || $random == 5) {
  echo "La variable \$random es igual a $random";
};

echo "<br>";

if ($random != 3) {
  echo "El número NO es 3";
} else {
  echo "El número es 3";
};

echo "<br>";

$porciento = rand(1,100);
// $porciento = 50;
var_dump($porciento);
if ($porciento > 50) {
  echo "El número es mayor a 50";
} else {
  echo "El número es menor a 50";
};

echo "<br>";

// Ejercicio 05

$nombreDeUsuario = "admin";
$ClaveDeUsuario = "1234";

if ($nombreDeUsuario == "admin" && $ClaveDeUsuario == "1234") {
  echo "¡Bienvenido a tu cuenta!";
} else {
  echo "Lo sentimos, hay un error de credenciales";
}

// Ejericio 06

echo "<br>";

$edad = 15;
$casado = true;
$sexo = "Femenino";

if (($edad > 18 && $casado == false) || $sexo == "Otro") {
  echo "Bienvenido";
}

// Ejercicio 07

echo "<br>";

$cantidadDeAlumnos = 0;

if ($cantidadDeAlumnos) {
  echo "true";
} else {
  echo "false";
}

// Ejercicio 08

echo "<br>";

if ($i = 0) {
  echo "true";
} else {
  echo "false";
}

// Ejercicio 09

echo "<br>";

$numero = rand(1,100);
var_dump($numero);
echo ($numero % 2 == 0) ?  "El número es par" : "El número es impar";

// Ejercicio 10

echo "<br>";

$nombre = "Juan";

switch ($nombre) {
  case 'Pedro':
    echo "Hola $nombre";
    break;
  case 'Pablo':
    echo "Hola $nombre";
    break;
  case 'Patricio':
    echo "Hola $nombre";
    break;
  case 'Federico':
    echo "Hola $nombre";
    break;
  case 'Javier':
    echo "Hola $nombre";
    break;

  default:
    echo "No hay a quien saludar";
    break;
}

// Ejercicio 11

echo "<br>";

$colorRemera = "Carmesí";

switch ($colorRemera) {
  case 'Rojo':
  case 'Amarillo':
  case 'Verde':
    echo "La remera es un color primario";
    break;

  default:
    echo "La remera es de color desconocido";
    break;
}

 ?>
