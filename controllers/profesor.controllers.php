<?php
require_once ('../models/profesor.models.php');
require_once ('../models/escuela_profesor.models.php');

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

    public function agregarProfesor() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Verificar si se han enviado los datos del formulario
            if (isset($_POST["nombre_profesor"]) && isset($_POST["asignatura"]) && isset($_POST["horario"]) && isset($_POST["anio_ingreso"])) {
                // Obtener los datos del formulario
                $nombre = $_POST["nombre_profesor"];
                $asignatura = $_POST["asignatura"];
                $horario = $_POST["horario"];
                $anio_ingreso = $_POST["anio_ingreso"];

                echo "<script>";
                echo "console.log('Datos recibidos del formulario:')";
                echo "console.log('Nombre:', '" . $nombre . "')";
                echo "console.log('Asignatura:', '" . $asignatura . "')";
                echo "console.log('Horario:', '" . $horario . "')";
                echo "console.log('Año de ingreso:', '" . $anio_ingreso . "')";
                echo "</script>";

                // Llamar a la función agregarProfesor del modelo
                $this->profesor->agregarProfesor($nombre, $asignatura, $horario, $anio_ingreso);

                // Redirigir a alguna página de confirmación o a otra vista
                header('Location: ../views/profesor.views.php');
                exit();
            }
        }
    }
    /* 
    public function agregarProfesor($datos) {
        // Procesar los datos recibidos del formulario
        $nombre = $datos['nombre_profesor']; // Ejemplo de cómo obtener los datos
        $asignatura = $datos['asignatura'];
        $horario = $datos['horario'];
        $anio_ingreso = $datos['anio_ingreso'];

        // Imprimir los datos recibidos en la consola
            echo "<script>";
            echo "console.log('Datos recibidos del formulario:')";
            echo "console.log('Nombre:', '" . $nombre . "')";
            echo "console.log('Asignatura:', '" . $asignatura . "')";
            echo "console.log('Horario:', '" . $horario . "')";
            echo "console.log('Año de ingreso:', '" . $anio_ingreso . "')";
            echo "</script>";
        // Insertar los datos en la tabla de profesores
        $this->profesor->agregarProfesor($nombre, $asignatura, $horario, $anio_ingreso);
        header('../views/escuela.views.php');
        exit();
    }*/
    // Otras funciones para manejar las solicitudes relacionadas con los profesores
}
?>
