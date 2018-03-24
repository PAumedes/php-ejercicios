<?php
    session_start();
    if (!isset($_SESSION['counter'])) {
        $_SESSION['counter'] = 0;
    }
    if (isset($_POST['incrementar'])) {
        $_SESSION['counter']++;
    }
    if (isset($_POST['reset'])) {
        $_SESSION['counter'] = 0;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1><?=$_SESSION['counter']?></h1>
    <form action="" method="post">
        <input type="submit" value="reset" name="reset">
        <input type="submit" value="incrementar" name="incrementar">
    </form>
</body>
</html>