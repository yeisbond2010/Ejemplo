<?php
require_once('M/class.conexion.php');
require_once('M/class.consultas.php');
require_once('CO/consultar1.php');
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Buenaventura</title>
        <meta charset="utf8"/>
        <link rel="stylesheet" href="Estilos/estilo.css">
        <script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/functions.js"></script>
    </head>
    <body>
           <div id="container">
            <div id="header">
                <div id="logo">
                    <img src="Img/Logo.jpg">
                    </div>
                <div id="nav">       
                <ul>
         <li><a href="Buenaventura.html">Inicio</a> </li>
         <li><a href="Registro.php">Registro</a> </li>
         <li><a href="Buenaventura.html">Contactenos</a> </li>
             </ul>
          </div>
            </div>
            <div id="banner1">
            <div id="banner">
             <div id="titulo">
             <h1>
             LIBROS REGISTRADOS
             </h1>
             <p>
             Bienvenido, Aquí encontrara todos los libros que se encuentran registrados en el sistema, si desea realizar una búsqueda personalizada por favor regístrese e inicie sesión en el sistema
             </p>
             </div>
                    
            </div>
            </div>
            <div id="article">
            <ul class="tt-wrapper">
	
    <?php cargar();?>
    
</ul>

             
       </div>
       
    </body>

</html>