<?php
session_start();

include("conecta.php");

@$contra= $_POST['contraseña'];
@$contra1= $_POST['contra'];
if($contra==$contra1){
@$tipo= $_POST['tipo'];
@$cedula =$_POST['cedula'];
@$name=$_POST['name'];
@$direccion=$_POST['direccion'];
@$email = $_POST['email'];
@$usuario= $_POST['usuario'];
@$compa= $_POST['compa'];
$pass_cifrado=password_hash($contra,PASSWORD_DEFAULT);


$sql1="INSERT INTO usuario(cedula,tipo,nombre,email,direccion,user,pass) VALUES
('$cedula','$tipo','$name','$email','$direccion','$usuario','$pass_cifrado')";
$resultado1=mysqli_query($conexion,$sql1);


$sql2="INSERT INTO usuario_com(nit,id_user) VALUES
('$compa','$cedula')";
$resultado2=mysqli_query($conexion,$sql2);
$_SESSION['aviso1']="Cuenta Creada";
header("Location:registrar.php");

}else {

  $_SESSION['error1']="las contraseñas no son iguales";
  header("Location:registrar.php");
}
?>
