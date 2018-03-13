<?php
class Consultas{
    public function insertarusuario($arg_NumDoc,$arg_Pnom,$arg_Snom,$arg_Pap,$arg_Sap,$arg_Mail,$arg_Pas){
        $modelo =new Conexion();
        $conexion=$modelo->get_conexion();
        $sql="insert into usuario (Num_Doc,Pnom,Snom,Pap,Sap,Email,Pas) values(:Num,:Nomu,:Noms,:App,:Aps,:Em,:Pass)";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':Num',$arg_NumDoc);
        $statement->bindParam(':Nomu',$arg_Pnom);
        $statement->bindParam(':Noms',$arg_Snom);
        $statement->bindParam(':App',$arg_Pap);
        $statement->bindParam(':Aps',$arg_Sap);
        $statement->bindParam(':Em',$arg_Mail);
        $statement->bindParam(':Pass',$arg_Pas);
        if(!$statement){
          return "Error No se guardaron los registros";
            }else{
				$statement->execute();
                return "Sus datos se han almacenado";
			}
	}
	public function consultar(){
		$rows=null;
		$modelo=new Conexion();
		$conexion = $modelo->get_conexion();
		$sql= "SELECT * from libros";
$statement=$conexion->prepare($sql);
$statement->execute();
while($result=$statement->fetch()){
$rows[]=$result;
}
		return $rows;
	}
	
		public function consultar3($arg_Nlib){
		$rows=null;
		$modelo=new Conexion();
		$conexion = $modelo->get_conexion();
		$sql= "SELECT * from libros WHERE LibNom LIKE '%:CON%'";
$statement=$conexion->prepare($sql);
$statement->bindParam(':Num',$arg_Nom);
$statement->execute();
while($result=$statement->fetch()){
$rows[]=$result;
}
		return $rows;
	}
	
}
?>