<?php

// Ejercicios de la clase 01

echo "<h1> Ejercicios Clase 01 </h1>";
echo "<br><br>";
echo "<h2> Ejercicio 1 </h2>";
echo "<br>";

// ¿Qué sucede con el tipo de dato de las variables del punto e y punto f?
// ¿Qué sucede si a la variable del punto a le asignamos otro valor numérico, pero encerrado entre comillas?

$entero = 10;
$decimal = 3.14;
$simples = 'Texto declarado con comillas simples';
$dobles = "Texto declarado con comillas dobles";

echo "<p>La variable \$entero es igual a <strong> $entero </strong> y su var_dump es igual a ";
var_dump($entero);
echo "<p>La variable \$decimal es igual a <strong> $decimal </strong> y su var_dump es igual a ";
var_dump($decimal);
echo "<p>La variable \$simples es igual a <strong> $simples </strong> y su var_dump es igual a ";
var_dump($simples);
echo "<p>La variable \$decimal es igual a <strong> $dobles </strong>y su var_dump es igual a ";
var_dump($dobles);

$entero = "Diez";
echo "<p>La variable \$entero AHORA es igual a <strong> $entero </strong> y su var_dump es igual a ";
var_dump($entero);

$simples = 1.41;
echo "<p>La variable \$simples AHORA es igual a <strong> $simples </strong> y su var_dump es igual a ";
var_dump($simples);

$entero = "Tres coma cinco";
echo "<p>La variable \$entero AHORA es igual a <strong> $entero </strong> y su var_dump es igual a ";
var_dump($entero);

echo "<h2> Ejercicio 2 </h2>";
echo "<br>";

$uno="Tres";
$dos="tristes";
$tres="tigres";
$cuatro="tragan";
$cinco="trigo";
$seis="en";
$siete="un";
$ocho="trigal";

echo $frase = $uno . " " . $dos . " " . $tres . " " . $cuatro . " " . $cinco . " " . $seis . " " . $siete . " " .$ocho;
echo "<br>";
echo $frase = $uno . " " . $tres . " " . $cuatro . " " . $cinco;

echo "<h2> Ejercicio 4 </h2>";
echo "<br>";

$mi_array = ["Gato", "Perro", "Tortuga", "Canario", "Axolote"];

var_dump($mi_array);
echo "<br>";

$mi_array[] = "Serpiente";
$mi_array[] = "Tarántula";

var_dump($mi_array);
echo "<br>";
echo "Me gustan los animales: $mi_array[0], $mi_array[1], $mi_array[2], $mi_array[3], $mi_array[4], $mi_array[5] y $mi_array[6]";
echo "<br>";
$mi_array[0] = "Mono tití";
echo "Ahora me gustan estos animales: $mi_array[0], $mi_array[1], $mi_array[2], $mi_array[3], $mi_array[4], $mi_array[5] y $mi_array[6]";
echo "<br>";
$mi_array[100] = "Centésimo";
var_dump($mi_array);
echo "<br>";
$mi_array[16] = "Animalote";
var_dump($mi_array);
echo "<br>";

echo "<h2> Ejercicio 5 </h2>";
echo "<br>";

$auto = [
  "marca" => "Reanault",
  "modelo" => "Megane",
  "año" => 2005,
  "patente" => "GDR123"
];

var_dump($auto);

$auto[0] = "Patricio";
echo "<br>";
var_dump($auto);
$auto[14] = "La Caja";
echo "<br>";
var_dump($auto);
$auto["poliza"] = "1234";
echo "<br>";
var_dump($auto);
$auto["patente"] = "ABC123";
echo "<br>";
var_dump($auto);
$auto[0] = "Alberto";
echo "<br>";
var_dump($auto);

echo "<h2> Ejercicio 6 </h2>";
echo "<br>";

$entero = 10;
$decimal = 3.14;

echo "La suma de las variables \$entero y \$decimal dan como resultado: ";
echo $entero + $decimal;
echo "<br>";
echo "La resta de las variables \$entero y \$decimal dan como resultado: ";
echo $entero - $decimal;
echo "<br>";
echo "La división de las variables \$entero y \$decimal dan como resultado: ";
echo $entero / $decimal;
echo "<br>";
echo "La multiplicación de las variables \$entero y \$decimal dan como resultado: ";
echo $entero * $decimal;
echo "<br>";

$division = $entero / $decimal;
echo "La división de las variables \$entero y \$decimal dan como resultado: ";
echo $division;
echo "<br>";

$entero++;
$decimal++;
echo "Ahora \$entero y \$decimal valen: ";
echo $entero;
echo " y ";
echo $decimal;
echo " respectivamente.";

echo "<br>";

$entero += 5;
$decimal -= 0.6;
echo "Ahora \$entero y \$decimal valen: ";
echo $entero;
echo " y ";
echo $decimal;
echo " respectivamente.";

echo "<br>";

$resultado = (($entero * 2) + $decimal) / ($entero / 2);

echo $resultado;

echo "<h2> Ejercicio 7 </h2>";
echo "<br>";

$string = "Hola";
$string2 = "mundo!";

$string_total = $string . " " . $string2;
echo $string_total;
echo "<br>";
$string_php = $string_total . ". " . "Que bueno está PHP.";
echo $string_php;
echo "<br>";










// Declarar una variable con el string ‘Hola’, y otra variable con el string ‘mundo!’.
//
// En una nueva variable, concatenar las variables creadas recientemente para formar “Hola mundo!”.
// Crear una nueva variable que concatene la variable creada en el punto a, y concatenarle el string ‘Que bueno esta PHP


 ?>
