<?php
session_start();

include("conecta.php");
$id=$_SESSION['id'];
@$proyecto= $_POST['cbx_proyecto'];
@$historia= $_POST['cbx_historia'];
@$comentarios= $_POST['comentarios'];
date_default_timezone_set('America/Bogota');
$hoy = date("Y-m-d H:i:s");

$sql1="INSERT INTO solicitud(id_sol,estado,fecha_creacion,comentarios,activo) VALUES
('1',Activo','$hoy','$comentarios','1')";
$resultado1=mysqli_query($conexion,$sql1);



$_SESSION['aviso4']="Ticket Creado";
header("Location:form_tickets.php");



?>
