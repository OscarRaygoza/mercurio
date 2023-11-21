<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <title>Iniciar Sesion</title>
</head>
<header>
    <?php include "../modulos/nav-bar-main.php"; ?>
</header>
<body>
    <div class="contenedor_incia">
        <h2 class="h2">Inicia Sesion</h2>
        <form class="inicia-sesion" action="registrar.php" method="post">
           <label>Nombre:</label> <input type="text" name="nombre"><br>
            <label>Contraseña: </label><input type="password" name="password"><br>
            <input type="submit" value="Registrarse">
        </form>
    </div>
    <footer>
        <?php include '../modulos/footer.php' ?>
    </footer>
</body>
</html>

