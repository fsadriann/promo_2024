<?php

require 'conexion.php';

session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

// consulta BD

$consulta = "SELECT nombre_usuario, correo_usuario, password_usuario, COUNT(*) AS contar FROM Usuario WHERE correo_usuario = '$usuario' AND password_usuario = '$clave' ";

?>