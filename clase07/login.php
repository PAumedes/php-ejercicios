<?php
// INICIALIZACOIN DE VARIABLES
$loginEmail = "";
$loginPass = "";
$loginValid = FALSE;
$loginInvalid = FALSE;
$userName = "";

// TRAER DATOS DE BASE DE DATOS JSON
$dbUsers = file_get_contents('registro.json');
$dbUsersArray = explode(PHP_EOL, $dbUsers);
array_pop($dbUsersArray);
$tmpUsersArray = [];
foreach ($dbUsersArray as $dbUser) {
    $tmpUsersArray[] = json_decode($dbUser, true);
}

if($_POST){
    $loginEmail = $_POST['email'];
    $loginPass = $_POST['pass'];
    foreach ($tmpUsersArray as $users) {
        if ($users['email'] == $loginEmail && (password_verify($loginPass,$users['password']))) {
            $loginValid = TRUE;
            $userName = $users['name'];
        } else {
            $loginInvalid = TRUE;
        }
    }   
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style media="screen">
	 	* {
	 		box-sizing: border-box;
	 	}
	 	.form-control {
	 		border: solid 1px #dddddd;
			background-color: #eeeeee;
			padding: 5px;
			margin-bottom: 10px;
	 	}
		.form-control input:not([type=checkbox]) {
			display: block;
			height: 40px;
			width: 100%;
			margin-top: 5px;
			padding: 15px;
			font-size: 1em;
			outline: none;
		}
		.form-control select {
			width: 60%;
			height: 40px;
			font-size: 1em;
			outline: none;
		}
		.form-control button {
			background-color: #24c4d4;
			color: #FFFFFF;
			font-size: 1.2em;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
		}
		span {
			color: red;
		}
        form {
            display: <?= ($loginValid == TRUE) ? "none" : "block"?>;
        }
        nav {
            display: <?= ($loginValid == TRUE) ? "initial" : "none"?>;
        }
	 </style>
</head>
<body>
    <form method="post">
        <fieldset>
            <legend>Ingresá tus datos</legend>
            <input type="email" name="email" id="email" autofocus placeholder="Ingresá tu email">
            <input type="password" name="pass" id="pass" placeholder="Ingresá tu contraseña">
            <input type="submit" value="Ingresar">
            <span><?= ($loginInvalid == TRUE) ? "El usuario no existe o la contraseña es inválida" : ""?></span>
        </fieldset>
    </form>
    <nav>
        <ul>
            <div>
                <img src="" alt="">
            </div>
            <li>Hola, <?= ($userName != "") ? $userName : ""?></li>
            <li>Salir</li>
        </ul>
    </nav>
</body>
</html>