<?php

namespace clases;
class HashPassword
{
    public static function generarHash($password) {
        // Generar un hash de la contraseña usando el algoritmo bcrypt
        $hash = password_hash($password, PASSWORD_DEFAULT);
        return $hash;
    }
    public static function verificarHash($password, $hashGuardado) {
        // Verificar si la contraseña coincide con el hash guardado
        return password_verify($password, $hashGuardado);
    }
}