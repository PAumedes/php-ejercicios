<?php
	$paises = ['Argentina', 'Brasil', 'Colombia', 'Chile', 'Ecuador', 'Paraguay', 'Perú', 'Uruguay', 'Venezuela' ];
	$style = "";
	if(isset($_POST['versionCorta'])){
		$style = "style='display:none;'";
	}
	$nameErr = $emailErr = $usernameErr = $passwordErr = "";
	$name = $email = $username = $password = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["name"])) {
			$nameErr = "Por favor, no te olvides de ingresar tu nombre";
		}
		else {
			$name = $_POST["name"];
		}
	
		if (empty($_POST["email"]))  {
			$emailErr = "Por favor, no te olvides de ingresar tu eMail";
		}
		else {
			$email = $_POST["email"];
		}
	
		if (!isset($_POST["username"])) {
			$usernameErr = "Por favor, no te olvides de ingresar tu nombre de usuario";
		}
		else {
			$username = $_POST["username"];
		}
	
		if (empty($_POST["password"])) {
			$passwordErr = "Por favor, no te olvides de ingresar tu contraseña";
		}
		else {
			$password = $_POST["password"];
		}
	}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contact us</title>
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
	 </style>
</head>
<body>
	<form method='post' action="<?= htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <fieldset >
			<legend>Registrate</legend>

			<strong>* campos requeridos</strong><br><br>

			<div class='form-control'>
				<label for='name' >Nombre completo*: </label>
				<input type='text' name='name' id='name' value="<?= htmlspecialchars($name) == '' ? $nameErr : htmlspacialchars($name);?>">
			</div>

			<div class='form-control'>
				<label for='email' >Email*:</label>
				<input type='text' name='email' id='email' value="<?= htmlspecialchars($email) == '' ? $emailErr : htmlspacialchars($email);?>">
			</div>

			<div class='form-control'>
				<label for='username' >Nombre de usuario*:</label>
				<input type='text' name='username' id='username' value="<?= htmlspecialchars($username) == '' ? $usernameErr : htmlspacialchars($username);?>">
				<?php var_dump($username)?>
			</div>

			<div class='form-control'>
				<label for='password'>Contraseña*:</label>
				<input type='password' name='password' id='password' value="<?= htmlspecialchars($password) == '' ? $passwordErr : '';?>">
			</div>

			<div class='form-control'<?= $style;?>>
				<label for='confirmPassword'>Confirmar contraseña:</label>
				<input type='text' name='confirmPassword' id='confirmPassword'>
			</div>

			<div class='form-control'<?= $style;?>>
				<label for='telephone'>Teléfono de Contacto</label>
				<input type='tel' name='telephone' id='telephone' value="<?= isset($_POST['telephone']) ? $_POST['telephone'] : ''?>">
			</div>

			<div class='form-control'<?= $style;?>>
				<label for='address'>Domicilio</label>
				<input type='text' name='address' id='address' value="<?= isset($_POST['address']) ? $_POST['address'] : ''?>">
			</div>			
			
			<div>
				<label for="countries">Selecciona tu país de origen</label><br>
				<select name="paises">
					<?php
						foreach ($paises as $pais) {
							echo "<option value=$pais>$pais</option>";
						} 
					?>
				</select>
			</div>

			<div>
				Selecciona tus pasatiempos<br>
				<input id="foto" type="checkbox" name="hobbies[]" value="foto"><label for="foto">Fotografía</label><br>
				<input type="checkbox" name="hobbies[]" value="pintura">Pintura<br>
				<input type="checkbox" name="hobbies[]" value="danza">Danza<br>
				<input type="checkbox" name="hobbies[]" value="patin">Patín artistico<br>
			</div>

			<div class='form-control'>
				<button type="submit">ENVIAR</button>
			</div>
			
	  </fieldset>
	</form>
</body>
</html>
