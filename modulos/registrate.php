<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../css/estilos.css">
    <title>Registrate</title>
</head>
<header>
    <?php include '../modulos/nav-bar-main.php' ?>
</header>
<body>
    <div class="contenedor_form">
        <h2 class="h2">Registrate</h2>
        <form class="inicia-sesion mt-5" action="registrar.php" method="post">
            <div class="form_label">
                <label>Nombre:</label>
                <label>Apellido Paterno:</label>
                <label>Apellido Materno:</label>
            </div>
            <div class="form_nombre">
                <input type="text" name="nombre">
                <input type="text" name="nombre">
                <input type="text" name="nombre">
            </div>
            <div class="mt-1 label_usuario">
                <label>Nombre de Usuario:</label>
                <label>Contraseña: </label>
                <label>Repetir Contraseña</label>
            </div>
            <div class="input_usuario">
                <input type="text" name="nombre_usuario">
                <input type="password" name="password">
                <input type="password" name="password_repet">
            </div>
            <span>Domicilio</span><br>
            <div class="label_domicilio">
                <label>Calle: </label>
                <label>Numero: </label>
            </div>
            <div class="input_domicilio">
                <input type="text" name="calle">
                <input type="number" name="numero">
            </div>
            <div class="mt-1 label_cp">
                <label>C.P. </label>
                <label>Colonia: </label>
            </div>
            <div class="input_cp">
                <input type="number" name="cp">
                <input type="text" name="colonia">
            </div>
            <div class="mt-1 label_pais">
                <label>Poblacion: </label>
                <label>Pais: </label>
            </div>
            <div class="input_pais">
                <input type="text" name="poblacion">
                <input type="text" name="pais">
            </div>
            <input class="bouton mt-5" type="submit" value="Registrarse">
        </form>
    </div>
</body>
<div class="back-footer">
    <?php include '../modulos/footer_main.php' ?>
</div>
</html>
