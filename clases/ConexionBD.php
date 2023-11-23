<?php

namespace clases;
use mysqli;
class ConexionBD
{
    private static $instancia;
    private $conexion;
    private $servername = "localhost";
    private $username = "root";
    private $password = "Oscar*780917";
    private $dbname = "mercuriodb";

    private function __construct()
    {
        $this->conexion = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($this->conexion->connect_error) {
            die("Conexión fallida: " . $this->conexion->connect_error);
        }
    }

    public static function obtenerInstancia()
    {
        if (!self::$instancia) {
            self::$instancia = new self();
        }
        return self::$instancia;
    }

    public function obtenerConexion()
    {
        return $this->conexion;
    }

    private function __clone()
    {
    }

    function __wakeup()
    {
    }
}

