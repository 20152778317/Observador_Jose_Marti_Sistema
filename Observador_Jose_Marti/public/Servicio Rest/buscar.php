<?php

include 'conexion.php';
$Nombre=$_GET['Nombre'];


 $consulta = "select * from estudiante where Nombre = '$Nombre'";
 
 $resultado = $conexion->query($consulta);

 while($fila=$resultado -> fetch_array()) 
 {
     $estudiante[] = array_map('utf8_encode',$fila);
 }
 echo json_encode($estudiante);
 $resultado -> close();
?>
  