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
    <title>Registrar Usuarios</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="header">
        <h1>Registrar Usuarios</h1>
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
        <div class="login">
        <form  action="modelo/reg_usuarios.php" method="post">
                <b><p>Nombre: </p></b>
                <input type="text" name="nombre" id="" placeholder="Nombre usuario" require>
                <br>
                <b><p>Correo: </p></b>
                <input type="text" name="correo" id="" placeholder="Correo usuario" require>
                <b><p>Contraseña: </p></b>
                <input type="password" name="clave" id="" placeholder="Clave usuario" require>
                <br>
                <input type="submit" value="Ingresar">
        </form>
        </div>
    </div>
    <script src="main.js"></script>


</body>
</html>