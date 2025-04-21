<?php

require_once("../config/database.php");
require_once("../controller/userController.php");

$database = new Database();
$conn = $database->connect();
$successMessage = '';

if($_SERVER["REQUEST_METHOD"] === "POST")
{
    $nombre = $_POST["nombre"];
    $clave = $_POST["clave"];
    $correo = $_POST["correo"];

    $controller = new userController();
    if (!$controller->checkUserExists($correo)) {
        $controller->addUser($nombre, $clave, $correo);
        $successMessage = "¡Registro exitoso! Ahora puedes iniciar sesión.";
    } else {
        $successMessage = "Este correo ya está registrado.";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../design/Index.Css?">
</head>
<body>
    <div class="contenedor-pagina">
    <header class="header-registro">
        <img class="logito" src="../IMG/logo.png">
    </header>
    <div class="form-contenedor">
        <h2 class="txt-form">Formulario Registro</h2>
        <form method="POST">
        <input type="text" name="nombre" required minlength="3" placeholder="Ingresa tu nombre">
        <input type="email" name="correo" required placeholder="Ingresa tu Correo">
        <input type="password" name="clave" required minlength="12" placeholder="Ingresa la clave">
        <button type="submit">Registrarse</button>
        </form>
    </div>
    </div>
</body>
</html>