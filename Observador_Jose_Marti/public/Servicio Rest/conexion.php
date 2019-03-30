 <?php

$hostname='localhost';
$database='bd_sis_observador';
$username='josemarti';
$password='d8DsmGRreJtzxEHX';

$conexion = new mysqli($hostname,$username,$password,$database);
if($conexion->connect_errno){
    echo "lo sentimos,el sitio web esta esperimentando problemas";
}

 ?>