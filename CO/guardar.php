<?php
require_once('../M/class.conexion.php');
require_once('../M/class.consultas.php');
$mensaje=null;
$Doc=$_POST['Ndoc'];
$Nom1=$_POST['Pnom'];
$Nom2=$_POST['Snom'];
$Ap1=$_POST['Pap'];
$Ap2=$_POST['Sap'];
$Ema=$_POST['Em'];
$Pas=$_POST['Ps'];

if(strlen($Doc) > 0 && strlen($Nom1) > 0 && strlen($Nom2) > 0 && strlen($Ap1) > 0 && strlen($Ap2) > 0 && strlen($Ema) > 0 && strlen($Pas) > 0){
$consultas =new Consultas();
$mensaje=$consultas->insertarusuario($Doc,$Nom1,$Nom2,$Ap1,$Ap2,$Ema,$Pas);

}else{
        echo"Error campos vacios";
    }
	
	PRINT <<<HERE

	<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Buenaventura</title>
        <meta charset="utf8"/>
        <link rel="stylesheet" href="estilo.css">
        <script src="js/jquery-1.11.0.min.js"></script>
	<script src="../js/functions.js"></script>
    </head>
    <body>
           <div id="container">
            <div id="header">
                <div id="logo">
                    <img src="Img/Logo.jpg">
                    </div>
                <div id="nav">       
                <ul>
         <li><a href="../Buenaventura.html">Inicio</a> </li>
         <li><a href="../Registro.php">Registro</a> </li>
         <li><a href="../Buenaventura.html">Contactenos</a> </li>
             </ul>
          </div>
            </div>
            <div id="banner1">
            <div id="banner">
             <div id="titulo">
             <h1>
             REGISTRO GUARDADO
             </h1>
             <p>
             Estimado usuario, usted se ha registrado en nuestro sistema, ahora podrá iniciar sesión y realizar consultas personalizadas sobre los libros existentes.
             </p>
             </div>
                    
            </div>
            </div>
            <div id="article">
            <ul class="tt-wrapper">
            
    <div id ="img">
    <img src="Img/77552.gif">
    </div>
</ul>         
    </body>

</html>
HERE;
 ?>
	