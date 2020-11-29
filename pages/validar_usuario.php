<?php
session_start();
require_once('conecta.php');

@$usuario=$_POST["login"];
$_SESSION['name']=$usuario;
@$contra=$_POST["password"];
$contador1=0;
$sql1="SELECT * FROM usuario where user='$usuario'";
$resultado1=mysqli_query($conexion,$sql1);
while ($fila1=mysqli_fetch_array($resultado1)){
if(password_verify($contra,$fila1['pass'])){//nos va devolver si es true o false ;es true si la contraseña es igual ala cifrada
$contador1++;
$_SESSION['id']=$fila1['cedula'];
}
}

if ($contador1>0) {
header("Location:paginaprincipal_usu.php");
}
else{
header("Location:../index.php");
$_SESSION['error']="Usuario o contraseña invalida";
}
?>
