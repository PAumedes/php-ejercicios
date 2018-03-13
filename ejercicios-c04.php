<?php

$numeroMagico = 60;

function sumar($num1, $num2){
  return  $num1 + $num2;
}

$numGrande1 = sumar(5,3);
$numGrande2 = sumar(6,10);

function saludar ($nombre, $apellido = "") {
  return "Hola $nombre $apellido, bienvenid@!";
}

echo saludar("Ana", "Suarez");

function saludar2 ($nombre, $apellido = null) {
  if (!$apellido) {
  return "Hola $nombre, bienvenid@! Sería lindo que nos dejes saber tu apellido";
  }
}

echo "<h2>Ejercicio 1</h2>";

function mayor($num1, $num2, $num3 = null){
  if (!$num3 || !is_numeric($num3)){
    global $numeroMagico;
    $num3 = $numeroMagico;
  }
  if ($num1 > $num2){
    if ($num1 > $num3) {
      return $num1;
    } elseif ($num3 > $num2) {
      return $num3;
    }
  } elseif ($num2 > $num3){
    return $num2;
  } else {
    return $num3;
  }
}

echo mayor(1,2,3) . "<br>";
echo mayor(3,2,1) . "<br>";
echo mayor(2,3,1) . "<br>";
echo mayor(2,1,3) . "<br>";
echo mayor(10,2,3) . "<br>";
echo mayor(1,20,3) . "<br>";
echo mayor(1,2,30) . "<br>";
echo mayor(15,29,56) . "<br>";
echo mayor(15,29) . "<br>";

echo "<h2>Ejercicio 2</h2>";

function tabla($base, $limite = null){
  if (!$limite || !is_numeric($limite)){
    global $numeroMagico;
    $limite = $numeroMagico;
  }
  $a = 0;
  $mi_array = [];
  for ($i=$base; $i <= $limite; $i++) {
      $mi_array[$a] = $i;
      $a++;
  }
  return $mi_array;
}
echo "<pre>";
var_dump(tabla(5, 20));
echo "</pre>";
echo "<pre>";
var_dump(tabla(5));
echo "</pre>"









 ?>
