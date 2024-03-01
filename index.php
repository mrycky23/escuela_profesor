<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 5px;
            border-radius: 5px;
            background-color: #555;
        }

        nav a:hover {
            background-color: #777;
        }

        .container {
            text-align: center;
            margin-top: 50px;
        }
        .sidebar {
            height: 100%;
            width: 200px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #333;
            padding-top: 20px;
            text-align: center;
        }

        .sidebar a {
            display: block;
            padding: 10px 0;
            color: #fff;
            text-decoration: none;
        }

        .submenu {
            display: none;
            background-color: #555;
        }

        .submenu a {
            padding-left: 20px;
        }

        .sidebar a:hover, .submenu a:hover {
            background-color: #777;
        }

        .sidebar li:hover .submenu {
            display: block;
        }
    </style>
</head>
<body>
    <nav>
        <a href="./views/escuela.views.php">Escuela</a>
        <a href="./views/profesor.views.php">Profesor</a>
    </nav>
    
    <div class="container">
        <h3>Bienvenido</h3>
        <p>Por favor, selecciona una opción del menú.</p>
    </div>
    <!--
    <div class="sidebar">
        <ul>
            <li><a href="#">Ingreso de datos</a>
                <ul class="submenu">
                    <li><a href="#">Escuela</a></li>
                    <li><a href="#">Profesor</a></li>
                </ul>
            </li>
            <li><a href="#">Ver lista</a>
                <ul class="submenu">
                    <li><a href="#">Escuela</a></li>
                    <li><a href="#">Profesor</a></li>
                </ul>
            </li>
        </ul>
    </div>
    -->
</body>
</html>