<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmacia Mercurio</title>
    <link rel="stylesheet" type="text/css" href="/css/estilos.css">
    <style>
        .body{
            background-image: url("img/mariposa.svg");
            background-repeat:no-repeat;
            background-size: cover;
            background-position:center center;
            position: relative;
            min-height: 100vh;
        }
    </style>
</head>
<header>
    <?php include 'modulos/navBar.php'; ?>
</header>
<body class="body">
<div class="container">
    <div class="content-main">
        <h1 class="h1">Bienvenido a Farmacia Mercurio</h1>
    </div>
    <div>
        <?php include 'modulos/carrusel.php' ?>
    </div>
</div>
<script src="js/script.js"></script>
</body>
<div class="container">
    <?php include 'modulos/footer.php' ?>
</div>
</html>
