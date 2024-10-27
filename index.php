<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Login</title>
</head>
<body class="index">
    <h1>Prom 2024</h1>
    <div class="login">
        <form action="modelo/loguear.php" method="post">
            <div>
                <img src="img/escudo-blanco.png" alt="Escudo">
            </div>

            <p>Correo:</p>
            <input type="text" placeholder="Ingrese su correo electronico" name="usuario" autocomplete="off">


            <p>Contraseña:</p>
            <input type="password" placeholder="Ingrese su contraseña" name="clave" autocomplete="off">
            <br>
            <input type="submit" value="Ingresar">
        </form>
    </div>

</body>
</html>