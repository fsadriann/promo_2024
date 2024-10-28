
<?php
    require 'modelo/conexion.php';

    session_start();

    if(isset($_SESSION['username']) && isset($_SESSION['correo']))

    {
        $nombre_usuario = $_SESSION['username'];
        $correo_usuario = $_SESSION['correo'];
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prom 2024</title>
    <head>
        <link rel="stylesheet" href="estilos.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
</head>
<body>
    <div class="header">
        <h1>Promoción 2024</h1>
    </div>
    <div class="menu">
        <div class="btnM-O">
        </div>
        <div id="divInfo" class="float-div">
            <h3>Bienvenido</h3>
            <p><b>Usuario: </b><?php echo ''.$nombre_usuario; ?></p>
            <p><b>Correo: </b><?php echo ''.$correo_usuario; ?></p>
            <br>
            <button class="logout"><b><a href="modelo/cerrar_sesion.php">Cerrar Sesion</a></b></button>
        </div>
    </div>

    <div class="main">
        <h1>¿Qué deseas hacer?</h1>
        <div class="contenedor">
            <nav>
                <ul>
                    <h3>Registros</h3>
                    <li><a href="registrar_usuarios.php">Registrar Usuarios</a></li>
                    <h3>Consultas</h3>
                    <li><a href="modelo/consultar_usuarios.php">Consultar Usuarios</a></li>
                </ul>
            </nav>
            
        </div>
    </div>

    <script>
        let menu = document.querySelector('.btnM-O');
        menu.onclick = function(){
            menu.classList.toggle('active');
        }

        let active = document.querySelector('.menu');
        active.onclick = function(){
            active.classList.toggle('active');
        }
    </script>

</body>
</html>