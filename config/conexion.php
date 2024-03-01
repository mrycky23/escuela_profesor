<?php

$host = 'localhost';
$dbname = 'escuela_profesor';
$usuario = 'root';
$contraseña = '';


class Conexion {
    private $conexion;

    public function __construct($host, $dbname, $usuario, $contraseña) {
        try {
            $this->conexion = new PDO("mysql:host=$host;dbname=$dbname", $usuario, $contraseña);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
        }
    }

    public function getConexion() {
        return $this->conexion;
    }
}
?>


