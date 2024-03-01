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
    <form action="../controllers/escuela.controllers.php" method="post" id="form_escuela">
        <h2>Ingresar datos de la Escuela</h2>
        <div>
            <h3>Datos de Escuela</h3>
            <!--<label for="id_escuela">ID Escuela:</label>
            <input type="text" id="id_escuela" name="id_escuela" required>-->
            <div class="form-group"> 
            <label for="nombre_escuela">Nombre:</label>
            <input type="text" id="nombre_escuela" name="nombre_escuela" required>
            </div>
            

            <div class="form-group"> 
            <label for="direccion_escuela">Dirección:</label>
            <input type="text" id="direccion_escuela" name="direccion_escuela" required>
            </div>
            

            <div class="form-group"> 
            <label for="telefono_escuela">Teléfono:</label>
            <input type="text" id="telefono_escuela" name="telefono_escuela" required>    
            </div>
            

            <div class="form-group"> 
            <label for="num_estudiantes">Número de Estudiantes:</label>
            <input type="text" id="num_estudiantes" name="num_estudiantes" required>    
            </div>
            

            <div class="form-group"> 
            <input type="submit" value="Enviar">    
            </div>
            
            
        </div>
        
    </form>
    <button id="mostrarEscuelas">Mostrar Escuelas</button>
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
<script src="../scripts/escuela.js"></script>
</body>
</html>