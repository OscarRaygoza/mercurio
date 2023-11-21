<?php

namespace clases;
use \clases\HashPassword;
use \clases\ConexionBD;
class inciaSesion{
    private function inciasesion(){
        $conexion = ConexionBD::obtenerInstancia();
        $conn = $conexion->obtenerConexion();
        if ($conn->connect_error)
        {
            die("Conexión fallida: " . $conn->connect_error);
        }
        $nombreUsuario = $_POST['nombreUsuario'];
        $password = $_POST['password'];
        $sqlPass = "SELECT pass from usuarios where nomUsuario = '$nombreUsuario' ";

        if($nombreUsuario){
            if ($conexion->query($sqlPass) === TRUE){
                HashPassword::verificarHash($password,$sqlPass);
                ?><span>Usuario Correcto</span>
                <a href="mercurio/principal.php"></a><?php
            }
        }else{
            ?><span>Error de Usuario o Contraseña, Intente otra vez</span>
                <a href="inciaSesion.php"></a>
            <?php
        }
        $conn->close();
    }
}