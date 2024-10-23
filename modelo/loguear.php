<?php

require 'conexion.php';

session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

// consulta BD

$consulta = "SELECT nombre_usuario, correo_usuario, clave_usuario, COUNT(*) AS contar FROM usuarios WHERE correo_usuario = '$usuario' AND clave_usuario = '$clave' ";

?>