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
             BIBLIOTECA BUENAVENTURA
             </h1>
             <p>
             Bienvenido, Aquie encontrara un espacio en el cual podra consultar gran variedad de libros
             esperamos sea de su agrado los libros que aqui encontrara
              En el momento en que dejes de pensar en lo que puede pasar, empezarás a disfrutar de lo que está pasando.
             </p>
             </div>
                    
            </div>
            </div>
            <div id="article">
            <ul class="tt-wrapper">
            <div id="wrapper">
        <form action="CO/guardar.php" method="post">
            <fieldset>
                <legend>Registro de Usuarios</legend>
                
                <div>
                     <input type="text" Class="text" name="Ndoc" placeholder="Numero de Documento" required/>
                </div>
                <div>
                    <input type="text" Class="text" name="Pnom" placeholder="Primer Nombre" required/>
                </div>
                <div>
                    <input type="text" Class="text" name="Snom" placeholder="Segundo Nombre" required/>
                </div>
                <div>
                    <input type="text" Class="text" name="Pap" placeholder="Primer Apellido" required/>
                </div>
                <div>
                    <input type="text" Class="text" name="Sap" placeholder="Segundo Apellido" required/>
                </div>
                 <div>
                    <input type="text" Class="text" name="Em" placeholder="Correo Electronico" required/>
                </div>
                <div>
                    <input type="password" name="Ps" placeholder="Password" required/>
                </div>
                <div>
                      
                <input type="submit" name="submit" value="Enviar"/>
                <input type="reset" name="borar" value="Borrar"/>
            </fieldset>    
        </form>
    </div>
	
              
       </div>
       
    </body>

</html>