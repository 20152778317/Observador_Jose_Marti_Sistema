<?php

include 'conexion.php';

$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$edad=$_POST['edad'];
$ciudad=$_POST['ciudad'];

$consulta="insert into estudiante values('".$Nombre."','".$Apellido."','".$edad."','".$ciudad."')";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion); 
?>