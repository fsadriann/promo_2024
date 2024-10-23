<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

<?php

//Parametros de conexion a la BD

DEFINE('USER','root');
DEFINE('PW','');
DEFINE('HOST','localhost');
DEFINE('BD','prom200');

$conexion = mysqli_connect('USER','PW','HOST','BD');

if(!$conexion){
    die("la conexion a la BD fallo: "+ mysqli_error($conexion));
}else{
    die("conexion exitosa a la BD");
}

?>

