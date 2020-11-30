<?php
session_start();

include("conecta.php");
$id=$_SESSION['id'];
@$proyecto= $_POST['cbx_proyecto'];
@$historia= $_POST['cbx_historia'];
@$comentarios= $_POST['comentarios'];



$sql3="SELECT MAX(id_sol) CONSE FROM solicitud";
$resultado3=mysqli_query($conexion3,$sql);
while($fila=mysqli_fetch_array($resultado3,MYSQLI_ASSOC)){
  $con=$fila['CONSE'];
}
$con=$con+1;
date_default_timezone_set('America/Bogota');
$hoy = date("Y-m-d H:i:s");

$sql1="INSERT INTO solicitud(id_sol,estado,fecha_creacion,comentarios,activo) VALUES
('$con','Activo','$hoy','$comentarios','1')";
$resultado1=mysqli_query($conexion,$sql1);
$_SESSION['aviso4']="Ticket Creado";
$sql2="INSERT INTO usuario_pc(id_c,ced,id) VALUES
('$historia','$id','$con')";
$resultado2=mysqli_query($conexion,$sql2);


header("Location:form_tickets.php");



?>
