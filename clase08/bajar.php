<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Descarga todos los archivos</h1>
    <?php $archivos = glob("uploads/*");?>
    <?php var_dump($archivos);?>
    <?php foreach ($archivos as $imagen): ?>
        <p>
        
        <a href="<?=$imagen?>" download><?=$imagen?></a>
        </p>
    <?php endforeach; ?>

</body>
</html>

<?php
?>

