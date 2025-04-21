<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctanos</title>
    <link rel="stylesheet" href="../design/Index.Css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <nav class="navbar">
        <img src="../IMG/logo.png" alt="Logo">
        <div class="search-box">
            <input type="text" placeholder="¿Qué estás buscando?">
            <i class="fa fa-search"></i>
        </div>
        <div class="nav-links">
            <a href="../views/Nosotros.php">Nosotros</a>
            <div class="dropdown">
                <a href="../views/producto.php">Productos</a>
                <div class="dropdown-content">
                    <a href="#Colagenos">Colagenos</a>
                    <a href="#Citratos">Citratos</a>
                    <a href="#Propoleos">Propoleos</a>
                    <a href="#Drenadores hepaticos">Drenadores hepaticos</a>
                    <a href="#Multivitaminicos">Multivitaminicos</a>
                    <a href="#Purgantes">Purgantes</a>
                </div>
            </div>
            <a href="../views/contacto.php">Contactanos</a>
        </div>
        <div class="icons">
            <i class="fa fa-question-circle"></i>
            <a href="../views/registroUser.php"><i class="fa fa-user"></i></a>
            <i class="fa fa-shopping-cart"></i>
        </div>
    </nav>
    <div align="center">
        <br><br>
        <form >
            <h2>Formulario</h2>
            <br><br>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required>
            <br><br>
            <label for="correo">Correo:</label>
            <input type="email" nombre="correo" required>
            <br><br>
            <label for="Asunto">Asunto: </label>
            <textarea id="Asunto" name="Asunto" rows="" required></textarea>
            <br><br>
            <label for="Mensaje">Mensaje: </label>
            <textarea id="text" name="Mensaje" rows="5"required></textarea>
            <br>
            <button class="Enviar" type="submit">Enviar</button>
            <br><br>
        </form>
    <footer>
        <p>&copy;Página Tienda Naturista Los girasoles 2025</p>
    </footer>
</body>
</html>