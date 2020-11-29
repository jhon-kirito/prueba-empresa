<?php

$DB_HOST="localhost";
$usuarios="root";
$pasword="";
$database="tickets";


$conexion=mysqli_connect($DB_HOST,$usuarios,$pasword,$database);
if(mysqli_connect_errno()){
echo "fallo al conectar";
exit();
}
mysqli_set_charset($conexion,"utf8");

?>
