<?php
require_once('../config/conexion.php');
class Profesor {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion->getConexion();

        if ($this->conexion) {
            echo "Conexión exitosa a la base de datos.";
        } else {
            echo "Error al conectar a la base de datos.";
        }
    }

    public function obtenerTodosLosProfesores() {
        $query = "SELECT * FROM Profesor";
        $resultado = $this->conexion->query($query);
        return $resultado->fetchAll(PDO::FETCH_ASSOC);
    }
    public function agregarProfesor($nombre, $asignatura, $horario, $anio_ingreso) {
        $query = "INSERT INTO Profesor (nombre, asignatura, horario, anio_ingreso) VALUES (:nombre, :asignatura, :horario, :anio_ingreso)";
        $statement = $this->conexion->prepare($query);
        $statement->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $statement->bindParam(':asignatura', $asignatura, PDO::PARAM_STR);
        $statement->bindParam(':horario', $horario, PDO::PARAM_STR);
        $statement->bindParam(':anio_ingreso', $anio_ingreso, PDO::PARAM_STR);
        $statement->execute();
    }

}
?>
