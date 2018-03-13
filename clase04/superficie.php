<?php

function triangulo($base, $altura){
  return (($base * $altura) / 2);
}

echo "La superficie de un triángulo es igual a " . triangulo(4,5);

echo "<br>";

function rectangulo($base, $altura){
  return ($base * $altura);
}

echo "La superficie de un rectángulo es igual a " . rectangulo(4,5);

echo "<br>";

function cuadrado($lado){
  return ($lado * $lado);
}

echo "La superficie de un cuadrado es igual a " . cuadrado(4);

echo "<br>";

function circulo($radio){
  return (pi() * $radio * $radio);
}

echo "La superficie de un circulo es igual a " . circulo(4);



// Utilizando la función pi(), definir una función circulo() que retorne su superficie. ¿Cómo calcular la superficie de un círculo?)


 ?>
