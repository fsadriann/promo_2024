
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
    <title>Inicio</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body class="mosaicos">
    <div class="header">
        <h1>Grupos</h1>
        <a href="login.php">Iniciar Sesion</a>
    </div>

    <h2>Seleccione un grado</h2>
        <div class="container">
            <div class="section">
                <img class="img" onclick="expandSection(this)" src="img/11-1.jpg" alt="11-1" width="300" height="200">
                <h4>11-1</h4>
            </div>
            <div class="section">
                <img class="img" onclick="expandSection(this)" src="img/11-2.jpg" alt="11-2" width="300" height="200">
                <h4>11-2</h4>
            </div>
            <div class="section">
                <img class="img" onclick="expandSection(this)" src="img/11-3.jpg" alt="11-3" width="300" height="200">
                <h4>11-3</h4>
            </div>
        </div>
    <div class="container" >
        <div class="section">
            <img class="img" onclick="expandSection(this)" src="img/11-4.jpg" alt="11-4" width="300" height="200">
                <h4>11-4</h4>
        </div>
        <div class="section">
            <img class="img" onclick="expandSection(this)" src="img/11-5.jpg" alt="11-5" width="300" height="200">
                <h4>11-5</h4>
        </div>
    <button class="btn_mostrar" onclick="showAll()">Mostrar Todos</button>

    <script>
        function expandSection(clickedImg) {

        const containers = document.querySelectorAll('.container');
        const allSections = document.querySelectorAll('.section');
        const clickedSection = clickedImg.closest('.section');
            
        allSections.forEach(section => {
            if (section !== clickedSection) {
                section.style.display = 'none';
            } else {
                section.style.width = '50%'; 
                section.style.transition = 'all 0.3s ease';
                    
                const img = section.querySelector('.img');
                if (img) {
                    img.style.width = '600px';
                    img.style.height = '400px';
                }
            }
        });

        const showAllButton = document.querySelector('button');
        if (showAllButton) {
            showAllButton.style.display = 'block';
        }
        }

        function showAll() {
        const sections = document.querySelectorAll('.section');
        sections.forEach(section => {
            section.style.display = 'flex';
            section.style.width = '30%';
                
            const img = section.querySelector('.img');
            if (img) {
                img.style.width = '300px';
                img.style.height = '200px';
            }
        });

        const showAllButton = document.querySelector('button');
        if (showAllButton) {
            showAllButton.style.display = 'none';
        }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const showAllButton = document.querySelector('button');
            if (showAllButton) {
                showAllButton.style.display = 'none';
            }
        });

    </script>
</body>
</html>