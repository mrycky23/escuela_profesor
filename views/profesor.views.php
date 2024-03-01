<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <title>Formulario</title>
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
    <button id="mostrarProfesores">Mostrar Profesores</button>
    <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
    <tr>
        <th>ID Profesor</th>
        <th>Nombre</th>
        <th>Asignatura</th>
        <th>Horario</th>
        <th>Año ingreso</th>
    </tr>
    <?php if (isset($profesores)&& !empty($profesores)): ?>
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