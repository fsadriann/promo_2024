<?php
    require 'conexion.php';

    session_start();

    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    
    // consulta a la BD
    $consulta = "SELECT nombre_usuario, correo_usuario, clave_usuario, COUNT(*) AS contar FROM usuarios WHERE correo_usuario = '$usuario' AND clave_usuario = '$clave' ";

    
    // ejecutar la consulta
    $ejecucion_consulta = mysqli_query($conexion, $consulta) or trigger_error("error en la consulta a la BD: ".mysqli_error($conexion));

    // resultado de la consulta 
    $resultado = mysqli_fetch_array($ejecucion_consulta);

    if (empty($usuario or $clave)) {
        echo '<script type="text/javascript">alert("Por favor, llene los campos.");
        </script>';
    }

    if($resultado['contar']>0)
    {
        $_SESSION['username'] = $resultado['nombre_usuario'];
        $_SESSION['correo'] = $usuario;
        header("location: ../inicio.php");
    }
    else
    {
        echo '<script type="text/javascript">alert("Usuario o contraseña incorrecta"); window.location.href=" ../index.php"
        </script>';
    }
?>