<?php

use clases\ConexionBD;

require 'ConexionDB';
require 'HashPassword';

$conexion = ConexionBD::obtenerInstancia();
$conn = $conexion->obtenerConexion();
// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];


$password_hashed = password_hash($password, PASSWORD_DEFAULT);

// Insertar datos en la base de datos
$sql = "INSERT INTO usuarios (nombre, email, password) VALUES ('$nombre', '$email', '$password_hashed')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();

?>


