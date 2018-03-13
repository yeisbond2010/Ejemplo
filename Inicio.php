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
         <li><a href="Buenaventura.html">Contactenos</a> </li>
             </ul>
          </div>
            </div>
            <div id="banner1">
            <div id="banner">
             <div id="titulo">
             <h1>
             INICIO DE SESIÓN
             </h1>
             <p>
            Estimado usuario en esta sección usted podrá iniciar sesión, recuerde que para ingresar al sistema debe usar el correo electrónico y la contraseña registrada.
             </p>
             </div>
                    
            </div>
            </div>
            <div id="article">
            <ul class="tt-wrapper">
            <div id="wrapper">
        <form action="CO/checklogin.php" method="post">
            <fieldset>
                <legend>INGRESO AL SISTEMA</legend>
                
                <div>
                     <input type="text" Class="text" name="Ndoc" placeholder="USUARIO" required/>
                </div>
                <div>
                    <input type="password" Class="text" name="Pnom" placeholder="CONTRASEÑA" required/>
                </div>
                
                <div>
                      
                <input type="submit" name="submit" value="Entrar"/>
                <input type="reset" name="borar" value="Borrar"/>
            </fieldset>    
		    //esta es una nueva linea
        </form>
    </div>
	
              
       </div>
       
    </body>

</html>
