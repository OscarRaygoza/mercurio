<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/mercurio/css/estilos.css">
    <title>Iniciar Sesion</title>
</head>
<header>
    <?php include "../modulos/nav-bar-main.php"; ?>
</header>
<body>
    <div class="contenedor_incia">
        <h2 class="h2">Inicia Sesion</h2>
        <form class="inicia-sesion mt-5" action="registrar.php" method="post">
           <label>Usuario:</label> <input type="text" name="nombre_usuario"><br>
            <label class="mt-5">Contraseña: </label><input type="password" name="password"><br>
            <input class="bouton mt-5" type="submit" value="Acceder">
        </form>
    </div>
    <div class="back-footer">
        <?php include '../modulos/footer_main.php' ?>
    </div>
</body>
</html>

