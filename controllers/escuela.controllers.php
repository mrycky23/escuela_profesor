<?php
require_once '../models/escuela.models.php';
require_once '../models/escuela_profesor.models.php';

class ControladorEscuela {
//require_once 'Escuela.php';
//require_once 'EscuelaProfesor.php';


    private $escuela;
    private $escuelaProfesor;

    public function __construct() {
        // Conectar a la base de datos
        $conexion = new PDO("mysql:host=localhost;dbname=escuela_profesor", "root", "");
        
        // Crear instancias de los modelos
        $this->escuela = new Escuela($conexion);
        $this->escuelaProfesor = new EscuelaProfesor($conexion);
    }

    public function mostrarTodasLasEscuelas() {
        $escuelas = $this->escuela->obtenerTodasLasEscuelas();
        include '../views/escuela.views.php';
    }
    
}
?>
