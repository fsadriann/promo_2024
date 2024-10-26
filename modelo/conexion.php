<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

<?php

//Parametros de conexion a la BD


$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "prom200";

$conexion = mysqli_connect ($servidor, $usuario, $clave, $baseDeDatos);

if(!$conexion){
    die("la conexion a la BD fallo: "+ mysqli_error($conexion));
}

?>

