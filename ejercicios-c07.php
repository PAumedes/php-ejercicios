<?php

// if ($_POST['hola'] == "") {
//     echo "Es igual";
// } else {
//     echo "Es nulo";
// }

$miArray = [ 'a' =>1, 'b' =>2, 'c' =>'Yo <3 JSON'];

var_dump($miArray);
echo "<br>";
$miArrayJSON = json_encode($miArray);
echo $miArrayJSON;
echo "<br>";
$deJSONaArray = json_decode($miArrayJSON, true);
var_dump($deJSONaArray);
echo "<br>";

// foreach ($deJSONaArray as $key => $value) {
//     echo $value;
// }
echo $deJSONaArray['c'] . " | " . $deJSONaArray['b'] . " | " . $deJSONaArray['a'] . " | ";
echo "<br>";
krsort($deJSONaArray);

foreach ($deJSONaArray as $key => $value) {
    echo $value . " | ";
}

$fp = fopen("arhivo.php", "w");
fclose($fp);

function existe($archivo){
    if (file_exists($archivo)){
        $tamano = filesize($archivo);
        $file = fopen($archivo, "a+");
        for ($i=0; $i < 30; $i++) { 
            fwrite($file, "¡Hola Mundo!\n");
        }
        fclose($file);
        echo "Trabajo hecho";
    } else{
        $file = fopen($archivo, "a+");
        fclose($file);
        echo "Archivo inexistente, se acaba de crear";
    }
}

echo "<br>";
echo "<br>";


// Leer el archivo e imprimir un checkbox por cada categoría, capaz de ser enviado como array en un formulario. El value de cada checkbox será el id y el label mostrado a su derecha será el nombre proveniente del json como vemos en el en el array.


// Asigna el contenido de todo el archivo JSON a una variable en formato string
$lasCategorias = file_get_contents('categorias.json');

// Crea un array separando cada key value por cada End of Line de PHP
$categoriasArray = explode(PHP_EOL, $lasCategorias);

// Elimina la última línea que es solo un End of Line del array
array_pop($categoriasArray);

// Crea una nueva array
$categoriasFinales = [];
foreach ($categoriasArray as $id) {
    $categoriasFinales[] = json_decode($id, true);
}
?>

<form action="">
<?php foreach ($categoriasFinales as $laCategoria): ?>
<label for="<?=$laCategoria['id']?>">
    <input type="checkbox" name="<?=$laCategoria['id']?>" value="<?=$laCategoria['nombre']?>" id="<?=$laCategoria['id']?>"><?=$laCategoria['nombre']?><br>
</label>
<?php endforeach; ?>
</form>


<p>
<?php existe("texto.txt"); ?>
</p>



