<?php
requiere_once('../config/conexion.php');
class Profesor {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function obtenerTodosLosProfesores() {
        $query = "SELECT * FROM Profesor";
        $resultado = $this->conexion->query($query);
        return $resultado->fetchAll(PDO::FETCH_ASSOC);
    }

}
?>
