<?php
require_once '../models/profesor.models.php';
require_once '../models/escuela_profesor.models.php';

class ControladorProfesor {
    private $profesor;
    private $escuelaProfesor;

    public function __construct() {
        // Conectar a la base de datos
        $conexion = new PDO("mysql:host=localhost;dbname=escuela_profesor", "root", "");
        
        // Crear instancias de los modelos
        $this->profesor = new Profesor($conexion);
        $this->escuelaProfesor = new EscuelaProfesor($conexion);
    }

    public function mostrarTodosLosProfesores() {
        $profesores = $this->profesor->obtenerTodosLosProfesores();
        include '../views/profesor.views.php';
    }

    // Otras funciones para manejar las solicitudes relacionadas con los profesores
}
?>
