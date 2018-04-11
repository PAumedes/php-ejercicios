<?php

require_once(functions.php);

	// VERSION CORTA
	$style = "";
	if(isset($_POST['versionCorta'])){
		$style = "style='display:none;'";
	}
	// ARRAY DE PAISES
	$paises = ['Argentina', 'Brasil', 'Colombia', 'Chile', 'Ecuador', 'Paraguay', 'Perú', 'Uruguay', 'Venezuela' ];
	// ARRAY DE HOBBIES
	$pasatiempos = [
		"foto" => "Fotografía",
		"painting" => "Pintura",
		"dance" => "Danza",
		"hobbie" => "Patín Artistico"
	];

	// INICIALIZACION DE VARIABLES
	$name = "";
	$errorName = "";
	$email = "";
	$errorEmail = "";
	$username = "";
	$errorUsername = "";
	$pass = "";
	$errorPass = "";
	$rpass = "";
	$errorRPass = "";
	$tel = "";
	$errorTel = "";
	$address = "";
	$errorAddress = "";
	$country = "";
	$errorCountry = "";
	$hobbies = [];
	$errorHobbies = "";
	// PROFILE
	$picName = "";
	$picExt = "";
	$tmpPicName = "";
	$seSubio = "";
	$nombreArchivo = "";
	$ext = "";
	
	// ARCHIVO JSON
	$fileJSON = "registro.json";
	$arrayJSON = [];
	$stringJSON = "";
	

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
		span {
			color: red;
		}
	 </style>
</head>
<body>
	<form method='post' action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' enctype="multipart/form-data">
      <fieldset >
			<legend>Registrate</legend>

			<strong>* campos requeridos</strong><br><br>

			<div class='form-control'>
				<label for='name' >Nombre completo*: </label>
				<input type='text' name='name' id='name' value="<?=$name?>">
				<span><?=$errorName?></span>
			</div>

			<div class='form-control'>
				<label for='email' >Email*:</label>
				<input type='text' name='email' id='email' value="<?=$email?>">
				<span><?=$errorEmail?></span>
			</div>

			<div class='form-control'>
				<label for='username' >Nombre de usuario*:</label>
				<input type='text' name='username' id='username' value="<?=$username?>">
				<span><?=$errorUsername?></span>
			</div>

			<div class='form-control'>
				<label for='password'>Contraseña*:</label>
				<input type='password' name='password' id='password' value="">
				<span><?=$errorPass?></span>
			</div>

			<div class='form-control'<?= $style;?>>
				<label for='confirmPassword'>Confirmar contraseña:</label>
				<input type='password' name='confirmPassword' id='confirmPassword'>
				<span><?=$errorRPass?></span>
			</div>

			<div class='form-control'<?= $style;?>>
				<label for='telephone'>Teléfono de Contacto</label>
				<input type='tel' name='telephone' id='telephone' value="<?=$tel?>">
				<span><?=$errorTel?></span>
			</div>

			<div class='form-control'<?= $style;?>>
				<label for='address'>Domicilio</label>
				<input type='text' name='address' id='address' value="<?=$address?>">
				<span><?=$errorAddress?></span>
			</div>			
			
			<div>
				<label for="countries">Selecciona tu país de origen</label><br>
				<select name="paises">
					<?php
						foreach ($paises as $pais) {
							if ($country == $pais) {
								echo "<option selected value=$pais>$pais</option>";
							} else {
								echo "<option value=$pais>$pais</option>";
							}
						} 
					?>
				</select>
				<span><?=$errorCountry?></span>
			</div>

			<div>
				Selecciona tus pasatiempos<br>
				<?php foreach ($pasatiempos as $key => $value) : ?>
					<?php if (in_array($key, $hobbies))  :?>
						<input id="<?=$key?>" checked type="checkbox" name="hobbies[]" value="<?=$key?>"><label for="<?=$key?>"><?=$value?></label><br>
					<?php else : ?>
						<input id="<?=$key?>" type="checkbox" name="hobbies[]" value="<?=$key?>"><label for="<?=$key?>"><?=$value?></label><br>
					<?php endif; ?>
				<?php endforeach; ?>
				<span><?=$errorHobbies?></span>
			</div>

			<div class="form-control">
				<label for="profilePic">Tu foto de perfil</label>
				<input type="file" name="profilePic">
				<span><?=$seSubio?></span>
			</div>

			<div class='form-control'>
				<button type="submit" name='btn-sent'>ENVIAR</button>
			</div>
			
	  </fieldset>
	</form>
</body>
</html>
