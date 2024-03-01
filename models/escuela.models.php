<?php
requiere_once('../config/conexion.php');
class Escuela {
    private $conexion;

    public function __construct() {
        $this->conexion = new Conexion('localhost', 'escuela_profesor', 'root', '');
    }
    public function obtenerTodasLasEscuelas() {
        $query = "SELECT * FROM escuela";
        $resultado = $this->conexion->query($query);
        return $resultado->fetchAll(PDO::FETCH_ASSOC);
    }
/*
    public function insertarDatos($nombre, $direccion, $telefono, $numero_estudiantes) {
        // Preparar la consulta SQL para insertar los datos en la tabla escuela
        $consulta = $this->conexion->prepare("INSERT INTO escuela (nombre, direccion, telefono, numero_estudiantes) VALUES (?, ?, ?, ?)");
        // Ejecutar la consulta con los parámetros proporcionados
        $consulta->execute([$nombre, $direccion, $telefono, $numero_estudiantes]);
        // Verificar si la inserción fue exitosa
        if ($consulta->rowCount() > 0) {
            return true; // La inserción fue exitosa
        } else {
            return false; // La inserción falló
        }
    }

    public function obtenerTodosLosDatos() {
        // Preparar la consulta SQL para obtener todos los datos de la tabla escuela
        $consulta = $this->conexion->query("SELECT * FROM escuela");
        // Devolver los resultados de la consulta como un array asociativo
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
    */
}

?>