<?php
$funcionesEjecutadas = 0;

require_once('funciones.php');
require_once('superficie.php');

// circulo(radio)
// mayor(1,2,3)
$circuloGrande = mayor(circulo(3),circulo(4),circulo(5));
echo "$circuloGrande";
echo "<br>";
echo "Cantidad de funciones ejecutadas: $funcionesEjecutadas";
$texto = "Me encanta php, A Mi tambien me encanta php!";
echo "<br>";
echo strpos($texto, "php");

 ?>
