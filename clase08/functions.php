<?php

function validar(){

	// VALIDACION DE DATOS

    $name = trim($_POST['name']);
    if ($name == ""){
        $errorName = "Por favor ingresá tu nombre";
    }
    $email = trim($_POST['email']);
    if ($email == ""){
        $errorEmail = "Por favor ingresá tu email";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errorEmail = "Por favor ingresá un email válido";
    }
    $username = trim($_POST['username']);
    if ($username == ""){
        $errorUsername = "Por favor ingresá tu nombre de usuario";
    }
    $pass = trim($_POST['password']);
    if ($pass == ""){
        $errorPass = "Por favor ingresá un password";
    }
    $rpass = trim($_POST['confirmPassword']);
    if ($rpass == ""){
        $errorRPass = "Por favor ingresá la confirmación del password";
    }
    if ($pass != $rpass){
        $errorPass = $errorRPass = "Las contraseñas no coinciden, por favor ingresalas nuevamente";
    }						
    $tel = trim($_POST['telephone']);
    if ($tel == ""){
        $errorTel = "Por favor ingresá tu teléfono";
    }
    $address = trim($_POST['address']);
    if ($address == ""){
        $errorAddress = "Por favor ingresá tu dirección";
    }				
    $country = $_POST['paises'];
    if (array_key_exists('hobbies', $_POST)) {
        $hobbies = $_POST['hobbies'];
    } else {
        $hobbies = [];
        $errorHobbies = "Por favor seleccioná uno o más hobbies";
    }
    return true;
}
    




function validateStrings($post){
    
    $name = trim($post['name']);
    if (empty($name)){
        $errorName = "Por favor ingresá tu nombre";
    }
    $email = trim($post['email']);
    if (empty($email)){
        $errorEmail = "Por favor ingresá tu email";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errorEmail = "Por favor ingresá un email válido";
    }
    $username = trim($post['username']);
    if (empty($username)){
        $errorUsername = "Por favor ingresá tu nombre de usuario";
    }
    $pass = trim($post['password']);
    if (empty($pass)){
        $errorPass = "Por favor ingresá un password";
    }
    $rpass = trim($post['confirmPassword']);
    if (empty($rpass)){
        $errorRPass = "Por favor ingresá la confirmación del password";
    }
    if ($pass != $rpass){
        $errorPass = $errorRPass = "Las contraseñas no coinciden, por favor ingresalas nuevamente";
    }						
    $tel = trim($post['telephone']);
    if (empty($tel)){
        $errorTel = "Por favor ingresá tu teléfono";
    }
    $address = trim($post['address']);
    if (empty($address)){
        $errorAddress = "Por favor ingresá tu dirección";
    }				
    $country = $post['paises'];
    if (array_key_exists('hobbies', $post)) {
        $hobbies = $post['hobbies'];
    } else {
        $hobbies = [];
        $errorHobbies = "Por favor seleccioná uno o más hobbies";
    }
}

function toJSON(){
    
    $hashPass = password_hash($pass, PASSWORD_DEFAULT);
    $arrayJSON = [
        'name' => $name, 
        'email' => $email,
        'username' => $username,
        'password' => $hashPass,
        'telephone' => $tel,
        'address' => $address, 
        'hobbies' => $hobbies,
        'paises' => $country,
        'profilePic' => $ubicacion
    ];
    $stringJSON = json_encode($arrayJSON) . PHP_EOL;
    file_put_contents($fileJSON, $stringJSON, FILE_APPEND);
    // header("location:success.php");    
    
}


function validatePhoto(){

    if ($_FILES['profilePic']['error'] === UPLOAD_ERR_OK) {
        $picName = $_FILES['profilePic']['name'];
        $picExt = pathinfo($picName, PATHINFO_EXTENSION);
        $tmpPicName = $_FILES['profilePic']['tmp_name'];

        $ubicacion = dirname(__file__);
        $ubicacion = $ubicacion . '/images/' . $_POST['email'] . '.' . $picExt;

        if ($picExt == 'jpg' || $picExt == 'jpeg' || $picExt == 'png') {

            /* === Validación para que se repita el nombre de la imagen === */

            // Traigo todas las imágenes que hay en la carpeta
            $localPics = glob('images/*');

            // Genero un array vacio para guardar solo el nombre de cada imagen, sin la extensión
            $newPics = [];

            // 'Foricheo' el array que trajo todas las imágenes que están en la carpeta
            foreach ($localPics as $currentPic) {
                // A cada una de la imágenes les quito la extensión (.jpg ó .png) con el substr y pusheo cada nombre sin extensión en el array nuevo
                $newPics[] = substr($currentPic, 0, -4);
            }

            // Armo el nombre de la imagen que están tratando de subir (sin la extensión)
            $imagenActual = 'images/' . $_POST['email'];

            // Busco si en el array que contiene solo el nombre de las imágenes existe un nombre igual a la imagen que quiero subir
            if (in_array($imagenActual, $newPics)) {
                // Si existe arrojo un mensaje
                $seSubio = 'Ya existe la imagen';
            } else {
                // Si no existe, subo la imagen
                move_uploaded_file($tmpPicName, $ubicacion);
                $seSubio = 'Archivo subido exitosamente';
            }

        } else {
            $seSubio = 'Formato no reconocido, subi solo JPG, JPEG y PNG';
        }
    } else {
        $seSubio = 'No mandaste imagen';
    }  
    
}


?>