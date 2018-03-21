<?php

    $faq = [
        '¿Qué es Eventr?' => 'Eventr es una plataforma que permite tanto a DJ\'s como a organizadores de eventos encontrarse para generar shows increíbles.', 
        'Soy DJ ¿Qué me brinda la plataforma?' => 'Los DJ tendrán la posibilidad de crearse un perfil con todos sus datos, incluyendo las redes sociales con sus sets, fotos y experiencias. Así mismo tendrán un calendario donde podrán poner su disponibilidad para tocar.',
        '¿Y si soy organizador?' => 'Los organizadores de eventos, nuestros principales clientes, tendrán la posibilidad de buscar DJ\'s por nombre, género o disponibilidad de fecha.',
        '¿Cuáles son los medios de pago?' => 'Trabajamos con VISA, MasterCard y MercagoPago',
        '¿Puedo contratar a más de un DJ por evento?' => '¡Claro! Puedes contratar todos los que necesites, solo búscalos y agregalos a tu fecha ya creada.',
        'Soy DJ y necesito cancelar la fecha, ¿puedo hacerlo? ¿Se me penaliza?' => 'Puedes hacerlo, en Eventr creemos en nuestros usuarios y no imponemos penalizaciones a nuestros clientes por las eventualidades que puedan tener. De todas maneras, siempre es conveniente avisar con la mayor antelación posible así el orgnaizador puede buscar otro DJ para su evento.',
        'Soy organizador y necesito cancelar mi evento, ¿puedo? ¿Seré penalizado?' => 'Puedes hacerlo, en Eventr creemos en nuestros usuarios y no imponemos penalizaciones a nuestros clientes por las eventualidades que puedan tener. De todas maneras, siempre es conveniente avisar con la mayor antelación posible así los DJ pueden estar disponibles para otro evento.',
        'Si tengo algún problema, ¿dónde me puedo comunicar?' => 'Puedes contactarnos durante las 24hs a nuestro eMail, redes sociales o teléfonos',
    ];
    $colores = [
        'Blanco' => '#FFFFFF',
        'Verde' => '#00FF00',
        'Rojo' => '#FF0000'];
    $articulos = [
        'TV' => '$15.000', 
        'Notebook' => '$18.000', 
        'xBox One S' => '$9.000'
    ];
    $index = 0;
    $classIndex = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=htmlspecialchars($_SERVER["PHP_SELF"])?></title>
    <style media="screen">
	 	* {
	 		box-sizing: border-box;
	 	}
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
	}
	 </style>
</head>
<body>
    <p>
        <?php foreach ($colores as $color => $hexColor) : ?>
            <?php $index++?>
            <span style="color:<?=$hexColor?>"><?= (count($colores) == $index) ? $color : $color.','?></span>
        <?php endforeach ;?>
    </p>
    <ul>
    <?php foreach ($colores as $color => $hexColor) : ?>
            <li style="color:<?=$hexColor?>">
            <?php $classIndex++?>
            <?=$color?>
            </li>
    <?php endforeach ;?>
    </ul>
    <h1>FAQ</h1>
    <?php foreach ($faq as $pregunta => $respuesta) : ?>
        <h2><?=$pregunta?></h2>
        <p><?=$respuesta?></p>
    <?php endforeach ;?>


    <table style="width:50%">
        <tr>
            <th>Artículo</th>
            <th>Precio</th>
        </tr>
        
            <?php foreach ($articulos as $articulo => $precio) : ?>
            <tr>
            <td><?=$articulo?></td>
            <td><?=$precio?></td>
            </tr>
            <?php endforeach ;?>
    </table>

</body>
</html>

