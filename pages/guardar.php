<?php
session_start();

include("conecta.php");
$id=$_SESSION['id'];
@$proyecto= $_POST['cbx_proyecto'];
@$historia= $_POST['cbx_historia'];
@$comentarios= $_POST['comentarios'];
date_default_timezone_set('America/Bogota');
$hoy = date("Y-m-d H:i:s");



$sql="SELECT MAX(id_sol)CONSE FROM solicitud";
$resultado=mysqli_query($conexion,$sql);
while($fila=mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
                          $con=$fila['CONSE'];
                         }
 $con=$con+1;

 $sql1="INSERT INTO solicitud(id_sol,estado,fecha_creacion,comentarios,activo) VALUES
 ('$con','Activo','$hoy','$comentarios','1')";
 $resultado1=mysqli_query($conexion,$sql1);

 $sql2="INSERT INTO usuario_pc(id_c,ced,id) VALUES
 ('$historia','$id','$con')";
 $resultado2=mysqli_query($conexion,$sql2);
$_SESSION['aviso4']="Ticket Vinculado";
header("Location:form_tickets.php");


?>
