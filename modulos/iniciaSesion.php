<?php

use clases\HashPassword;

require '../clases/ConexionBD.php';
require '../clases/HashPassword.php';

if(isset($_POST['acceder'])) {
    $nombreUsuario = $_POST['nombre_usuario'] ?? null;
    $password = $_POST['password'];

    $conn = \clases\ConexionBD::obtenerInstancia()->obtenerConexion();
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $sqlPass = mysqli_query($conn, "SELECT passw from usuarios where nomUsuario = '$nombreUsuario' ");

    if($sqlPass) {
        $row = mysqli_fetch_assoc($sqlPass);
        if ($row) {
            $hashGuardado = $row['passw'];
            if (HashPassword::verificarHash($password, $hashGuardado)) {
                ?><script>
                    alert('Usuario Correcto');
                    window.location.replace('../modulos/administracion.php');
                </script><?php
            } else {
                ?><script>
                    alert('Contraseña Incorrecta');
                    window.location.replace('../index.php');
                </script><?php
            }
        } else {
            ?><script>
                alert('Usuario no encontrado');
                window.location.replace('../index.php');
            </script><?php
        }
    } else {
        ?><script>
            alert('Error en la consulta SQL');
            window.location.replace('../index.php');
        </script><?php
    }

    $conn->close();
}

