<?php
require_once('../config/conexion.php');
class EscuelaProfesor {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    // Función para obtener profesores de una escuela específica
    public function obtenerProfesoresDeEscuela($id_escuela) {
        $query = "SELECT * FROM Escuela_Profesor WHERE id_escuela = :id_escuela";
        $statement = $this->conexion->prepare($query);
        $statement->execute([':id_escuela' => $id_escuela]);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    // Función para obtener escuelas de un profesor específico
    public function obtenerEscuelasDeProfesor($id_profesor) {
        $query = "SELECT * FROM Escuela_Profesor WHERE id_profesor = :id_profesor";
        $statement = $this->conexion->prepare($query);
        $statement->execute([':id_profesor' => $id_profesor]);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    // Otras funciones para interactuar con la tabla Escuela_Profesor
}
?>
