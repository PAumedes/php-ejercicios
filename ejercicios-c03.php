<?php

echo "<h1> Ejercicios Clase 03 </h1>";
echo "<br><br>";
echo "<h2> Ejercicio 1 </h2>";
echo "<br>";

// Ejercicio 01

for ($i=1; $i < rand(0,100); $i++) {
  echo "$i  ";
}

echo "<br>";

// Ejercicio 02

for ($i=2; $i < 11; $i+=2) {
  echo "$i  ";
}

echo "<br>";

// Ejercicio 03
$a = 100;
while ($a >= 85) {
  echo "$a  ";
  $a--;
}

echo "<br>";

// Ejercicio 04

$contador = 1;
while ($contador > 5) {
  $b = $contador * 2;
  $contador++;
  echo "$b  ";
}

echo "<br>";

// Ejercicio 05
$moneda = 0;
$contador = 0;
$intentos = 0;
while ($contador != 5) {
  $moneda = rand(0,1);
  echo "$moneda  ";
  $intentos++;
  if ($moneda == 1) {
    $contador++;
  }
}
echo "<br>";
echo "La cantidad de intentos fueron $intentos";

echo "<br>";

// Ejercicio 06

$contador = 0;
$moneda = 0;

do {
  $moneda = rand(0,1);
  echo "$moneda  ";
  $contador++;
} while ($moneda != 1);
echo "<br>";
echo "La cantidad de intentos hasta que salga cara fueron: $contador";
echo "<br>";

// Ejercicio 07

$nombres = ["Patricio", "Alberto", "Javier", "Pablo", "Guillermo"];
for ($i=0; $i < count($nombres); $i++) {
  echo "$nombres[$i] | ";
}

echo "<br>";

$a = 0;
while ($a < count($nombres)) {
  echo "$nombres[$a] | ";
  $a++;
}

echo "<br>";


$a = 0;
do {
  echo "$nombres[$a] | ";
  $a++;
} while ($a < count($nombres));

echo "<br>";

foreach ($nombres as $value) {
  echo "$value | ";
}

echo "<br>";

// Ejercicio 08

$array_numeros = [];

for ($i=0; $i < 10 ; $i++) {
  $array_numeros[$i] = rand(0,10);
}
var_dump($array_numeros);
echo "<br>";
foreach ($array_numeros as $value) {
  if ($value != 5) {
    echo "$value | ";
  } else {
    echo "Se encontró un 5!";
    break;
  }
}

echo "<br>";

for ($i=0; $i < count($array_numeros) ; $i++) {
  if ($array_numeros[$i] != 5) {
    echo "$array_numeros[$i] | ";
  } else {
    echo "Se encontró un 5!";
    break;
  }
}

echo "<br>";
$a = 0;
while ($a < (count($array_numeros))) {
  if ($array_numeros[$a] != 5) {
    echo "$array_numeros[$a] | ";
  } else {
    echo "Se encontró un 5!";
    break;
  }
  $a++;
}

echo "<br>";
$a = 0;
do {
  if ($array_numeros[$a] != 5) {
    echo "$array_numeros[$a] | ";
  } else {
    echo "Se encontró un 5!";
    break;
  }
  $a++;
} while ($a < (count($array_numeros)));

echo "<br>";

// Ejercicio 09

$letras = range("a","o");
var_dump($letras);
for ($i=0; $i < count($letras); $i++) {
  echo "<p> En la posición $i se encuentra el valor $letras[$i]</p>";
}
echo "<br>";

// Ejercicio 10

$mascota = [
  "animal" => "Gato",
  "edad" => 1,
  "altura" => 30,
  "nombre" => "Luke",
];

foreach ($mascota as $key => $value) {
  echo "$key: $value <br>";
}
echo "<br>";



//
// 13. Partiendo de un archivo con la siguiente variable definida:
//
// $ceu = array( "Italia"=>"Roma", "Luxembourg"=>"Luxembourg", "Bélgica"=> "Bruselas", "Dinamarca"=>"Copenhagen", "Finlandia"=>"Helsinki", "Francia" => "Paris", "Slovakia"=>"Bratislava", "Eslovenia"=>"Ljubljana", "Alemania" => "Berlin", "Grecia" => "Athenas", "Irlanda"=>"Dublin", "Holanda"=>"Amsterdam", "Portugal"=>"Lisbon", "España"=>"Madrid", "Suecia"=>"Stockholm", "Reino Unido"=>"London", "Chipre"=>"Nicosia", "Lithuania"=>"Vilnius", "Republica Checa"=>"Prague", "Estonia"=>"Tallin", "Hungría"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valletta", "Austria" => "Vienna", "Polonia"=>"Warsaw") ;
//
// Crear un script que muestre el nombre de la capital y el país desde la variable $ceu.
//
// Opcional: Ordenar la lista por el nombre del país.
//
// Ejemplo de output:
// La capital de Holanda es Amsterdam.
// La capital de Grecia es Atenas.
// La capital de Alemania es Berlín.
//
// 14. Partiendo de un archivo con la siguiente variable definida:
//
// $ceu = [
//
// "Argentina"        => ["Buenos Aires", "Córdoba", "Santa Fé"],
//
// "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
//
// "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
//
// "Francia" => ["Paris", "Nantes", "Lyon"],
//
// "Italia" => ["Roma", "Milan", "Venecia"],
//
// "Alemania" => ["Munich", "Berlin", "Frankfurt"]
//
// ];
//
// Crear un script que muestre el nombre de cada país y sus ciudades desde la variable $ceu con el siguiente formato:
//
// Las ciudades de Argentina son:
//
// Buenos Aires
// Córdoba
// Santa Fé
//
// Las ciudades de Brasil son:
//
// Brasilia
// Rio de Janeiro
// Sao Pablo
//
// 15. A partir del ejercicio anterior:
//
// Agregarle a cada país un dato extra además de sus ciudades llamado esAmericano. Este valor debe ser true o false.
// Hacer que la impresión anterior no muestre países que no sean Americanos.
//
// IMPORTANTE: Para que esto funcione de manera prolija deberán crear un array asociativo por cada país en donde cada país tendrá los en la posición ciudades, sus ciudades y en la posición esAmericano un booleano conforme a si es o no americano.





 ?>
