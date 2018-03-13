<?php
function cargar(){
$consultas=new Consultas();
$nom="";
$filas=$consultas->consultar3($nom);
echo"<link rel='stylesheet' href='estilo2.css'>";
echo "<table id='racetimes'>";
  echo "<tr id='firstrow'><th>Código Libro</th>";
    echo"<th>Nombre Libro</th><th>Fecha de Lanzamiento</th>";
    echo"<th>Numero de Paginas</th>";
	echo"<th>Descripción</th>";
  echo"</tr>";
  foreach ($filas as $fila){
  echo "<tr>";
  echo "<td>".$fila['LibCod']."</td>";
   echo "<td>".$fila['LibNom']."</td>";
    echo "<td>".$fila['LibFeL']."</td>";
	 echo "<td>".$fila['LibNump']."</td>";
	  echo "<td>".$fila['LibDesc']."</td>";
  echo "</tr>";
  }
echo "</table>";

}
?>