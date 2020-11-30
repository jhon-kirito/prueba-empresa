<?php
session_start();

include("conecta.php");
$id=$_SESSION['id'];
@$proyecto= $_POST['cbx_proyecto'];
@$comentarios= $_POST['comentarios'];
@$historia= $_POST['historia'];
date_default_timezone_set('America/Bogota');
$hoy = date("Y-m-d H:i:s");
$sql5="SELECT MAX(id_historia)CONSE FROM historia_usuario";
$resultado5=mysqli_query($conexion,$sql5);
while($fila=mysqli_fetch_array($resultado5,MYSQLI_ASSOC)){
                          $con1=$fila['CONSE'];
                         }
 $con1=$con1+1;

 $sql6="INSERT INTO historia_usuario(id_historia,Descripcion,id_pro) VALUES
 ('$con1','$historia','$proyecto')";
 $resultado6=mysqli_query($conexion,$sql6);

//guardar solicitud
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
 ('$con1','$id','$con')";
 $resultado2=mysqli_query($conexion,$sql2);
$_SESSION['aviso5']="Ticket Creado";
header("Location:form_nuevo.php");


?>
