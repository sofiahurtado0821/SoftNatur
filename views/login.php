<?php
require_once("C:/xampp/htdocs/SoftNatur/controller/userController.php");

$controller = new userController();
$errorMessage = '';

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];
    $$errorMessage = $controller->validateUser($correo, $clave);

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../design/login.css?">
</head>
<body>
    <div class="contenedor-form">
        <form method="POST" class="contenedor-login">
            <input class="btn-txt" type="email" name="correo" id="" placeholder="Ingresa tu Correo" required>
            <input class="btn-txt" type="password" name="clave" id="" placeholder="Ingresa tu Contraseña" required>
            <button class="btn-ingresar">Ingresar</button>

            <p class="txt-Register">¿Aún no tienes cuenta?<a class="link-registro" href="../views/registroUser.php">Regístrate</a></p>
        </form>
    </div>
</body>
</html>