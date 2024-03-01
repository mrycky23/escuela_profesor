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
    </style>
</head>
<body>
    <form action="procesar_formulario.php" method="post">
        <h2>Ingresar datos de la Escuela</h2>
        <div>
            <h3>Datos de Escuela</h3>
            <!--<label for="id_escuela">ID Escuela:</label>
            <input type="text" id="id_escuela" name="id_escuela" required>-->

            <label for="nombre_escuela">Nombre:</label>
            <input type="text" id="nombre_escuela" name="nombre_escuela" required>

            <label for="direccion_escuela">Dirección:</label>
            <input type="text" id="direccion_escuela" name="direccion_escuela" required>

            <label for="telefono_escuela">Teléfono:</label>
            <input type="text" id="telefono_escuela" name="telefono_escuela" required>

            <label for="num_estudiantes">Número de Estudiantes:</label>
            <input type="text" id="num_estudiantes" name="num_estudiantes" required>

            <input type="submit" value="Enviar">
            
        </div>
        
    </form>
    <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
   
    
   
        <!-- Resto del código para mostrar los datos de la escuela -->
    


    <tr>
        <th>ID Escuela</th>
        <th>Nombre Escuela</th>
        <th>Dirección Escuela</th>
        <th>Teléfono Escuela</th>
        <th>Número de Estudiantes</th>
        <th>Profesores</th>
    </tr>
    <?php if ($escuela): ?>
    <?php foreach ($escuelas as $escuela): ?>
        <tr>
            <td><?php echo $escuela['id_escuela']; ?></td>
            <td><?php echo $escuela['nombre']; ?></td>
            <td><?php echo $escuela['direccion']; ?></td>
            <td><?php echo $escuela['telefono']; ?></td>
            <td><?php echo $escuela['numero_estudiantes']; ?></td>
            <td>
                <?php foreach ($escuela['profesores'] as $profesor): ?>
                    <?php echo $profesor['nombre']; ?><br>
                <?php endforeach; ?>
            </td>
        </tr>
        <?php endforeach; ?>
    <?php else: ?>
    <tr>
        <td colspan="6"><p>No hay escuelas disponibles.</p></td>
    </tr>
    <?php endif; ?>

    </table>
</div>
</div>
</body>
</html>