<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Formulario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        form {
            background-color: #fff;
            width: 400px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2, h3 {
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .custom-button {
            background-color: #4CAF50; /* Color de fondo */
            border: none; /* Sin borde */
            color: white; /* Color del texto */
            padding: 10px 20px; /* Espaciado interno */
            text-align: center; /* Alineación del texto */
            text-decoration: none; /* Sin subrayado */
            display: inline-block; /* Mostrar como un bloque en línea */
            font-size: 16px; /* Tamaño de fuente */
            cursor: pointer; /* Cursor al pasar el ratón */
            border-radius: 4px; /* Borde redondeado */
            transition: background-color 0.3s; /* Transición suave del color de fondo */
        }

        .custom-button:hover {
            background-color: #45a049; /* Color de fondo al pasar el ratón */
        }
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        select {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            font-size: 16px;
            width: 200px; /* ajusta el ancho según sea necesario */
            display: block; /* Cambia a bloque para que aparezca en su propia línea */
            margin-bottom: 10px; /* Añade un margen inferior para separarlo del siguiente elemento */
        }

        /* Estilo para las opciones dentro del select */
        select option {
            padding: 10px;
            font-size: 16px;
        }

        /* Estilo para el cuadro desplegable del select */
        select::-ms-expand {
            display: none;
        }

        /* Estilo para el div que sigue al select */
        .form-group {
            display: block; /* Asegúrate de que cada div aparezca en su propia línea */
            margin-bottom: 10px; /* Añade un margen inferior para separarlos */
        }

    </style>
</head>
<body>
    <form action="../controllers/profesor.controllers.php" id="form_profesor" method="post">
        <div>
            <h3>Datos de Profesor</h3>
            
            <div class="form-group">
            <label for="nombre_profesor">Nombre:</label>
            <input type="text" id="nombre_profesor" name="nombre_profesor" required>
            </div>


            <div class="form-group">
            <label for="asignatura">Asignatura:</label>
            <input type="text" id="asignatura" name="asignatura" required>
            </div>
            
            <div class="form-group">
            <label for="horario">Horario:</label>
            <input type="text" id="horario" name="horario" required>
            </div>

            <div class= "form-group">
            <label for="anio_ingreso">Año de Ingreso:</label>
            <input type="text" id="anio_ingreso" name="anio_ingreso" required>
            </div>
<!--
            <div class= "form-group"> 
            <label for="id_profesor">Escuela</label>
            <select type="text" id="id_profesor" name="id_profesor" select>
            </div>
        -->
        </div>
        <input type="submit" value="Enviar">
    </form>

    <script>
        // Agregar un controlador de eventos para el evento submit del formulario
        document.getElementById('form_profesor').addEventListener('submit', function(event) {
            // Evitar que el formulario se envíe automáticamente
            event.preventDefault();

            // Obtener los valores de los campos del formulario
            var nombreProfesor = document.getElementById('nombre_profesor').value;
            var asignatura = document.getElementById('asignatura').value;
            var horario = document.getElementById('horario').value;
            var anio = document.getElementById('anio_ingreso').value;
            // Obtener otros valores de campos de formulario de manera similar
            
            // Imprimir los valores en la consola
            console.log('Nombre del profesor:', nombreProfesor);
            console.log('Nombre del asignatura:', asignatura);
            console.log('Nombre del horario:', horario);
            console.log('Nombre del anio:', anio);
            // Imprimir otros valores de campos de formulario de manera similar
        });
    </script>

    <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
    <tr>
        <th>ID Profesor</th>
        <th>Nombre</th>
        <th>Asignatura</th>
        <th>Horario</th>
        <th>Año ingreso</th>
    </tr>
    <?php if ($profesores): ?>
    <?php foreach ($profesores as $profesor): ?>
        <tr>
            <td><?php echo $profesor['id_profesor']; ?></td>
            <td><?php echo $profesor['nombre']; ?></td>
            <td><?php echo $profesor['asignatura']; ?></td>
            <td><?php echo $profesor['horario']; ?></td>
            <td><?php echo $profesor['anio_ingreso']; ?></td>
            <td>
                <?php foreach ($profesor['escuela'] as $escuela): ?>
                    <?php echo $escuela['nombre']; ?><br>
                <?php endforeach; ?>
            </td>
        </tr>
        <?php endforeach; ?>
    <?php else: ?>
    <tr>
        <td colspan="6"><p>No hay profesores disponibles.</p></td>
    </tr>
    <?php endif; ?>

    </table>
</div>
    <script src="../scripts/profesor.js"></script>
</body>
</html>