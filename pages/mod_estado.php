<?php
session_start();

include 'conecta.php';



@$estado=$_POST['estado'];
@$numero=$_POST['numero'];
$id=$_GET['id'];






$consulta="UPDATE solicitud SET estado='$estado' WHERE id_sol='$numero'";
$resultado=mysqli_query($conexion,$consulta) OR die(header("location:fatal.php"));
header("location:estado.php");
 ?>
