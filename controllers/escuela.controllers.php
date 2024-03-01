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

    // Otras funciones para manejar las solicitudes relacionadas con las escuelas


    /*
    public function mostrarFormulario() {
        // Aquí puedes mostrar el formulario para ingresar los datos de la escuela
        include 'formulario_escuela.php';
    }

    public function procesarFormulario() {
        // Verificar si se ha enviado el formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Crear una instancia del modelo de Escuela
            $escuela = new Escuela();

            // Insertar los datos de la escuela en la base de datos
            $escuela->insertarDatos($_POST['nombre'], $_POST['direccion'], $_POST['telefono'], $_POST['numero_estudiantes']);
            
            // Redireccionar a la vista para mostrar los datos
            header("Location: vista_escuela.php");
            exit();
        }
    }

    public function mostrarDatos() {
        // Crear una instancia del modelo de Escuela
        $escuela = new Escuela();

        // Obtener los datos de la escuela desde la base de datos
        $datosEscuela = $escuela->obtenerDatos();

        // Mostrar los datos en la vista
        include 'vista_escuela.php';
    }
}

// Instanciar y ejecutar el controlador
$controlador = new ControladorEscuela();

// Manejar las solicitudes del usuario
if (isset($_GET['accion'])) {
    if ($_GET['accion'] == 'formulario') {
        $controlador->mostrarFormulario();
    } elseif ($_GET['accion'] == 'procesar') {
        $controlador->procesarFormulario();
    } elseif ($_GET['accion'] == 'mostrar') {
        $controlador->mostrarDatos();
    }*/
}
?>
