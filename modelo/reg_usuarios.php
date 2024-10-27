<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>

<?php
    require 'conexion.php';

    session_start();

    if(isset($_SESSION['correo']))
    {
        $nombre = $_POST['usuario'];
        $correo = $_POST['correo'];
        $clave = $_POST['clave'];

        $query = "INSERT INTO usuarios(nombre_usuario, correo_usuario, clave_usuario) VALUES ('$nombre', '$correo','$clave')";

        $insercion = mysqli_query($conexion, $query) or trigger_error("Error en la insercion de los datos: ".mysqli_error($conexion));

        if($insercion)
        {
            echo '<script type="text/javascript">alert("Usuario registrado");
                window.location.href=" ../registrar_usuarios.php";
                </script>';
        }
        else
        {
            header('location: ../pagina_principal.php');
        }
    }
?>