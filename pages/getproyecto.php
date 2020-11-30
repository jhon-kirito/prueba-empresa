<?php
session_start();
/*if(!isset($_SESSION["ROL"])){
  header("location:../index.php");
}else{
  if($_SESSION['ROL']!=1 or $_SESSION['ROL']!=2 ){
    header("location:../index.php");
}
}*/
?>

<?php
require ('conecta.php');


$id_estado = $_POST['id_proyecto'];

$queryM = "SELECT id_historia,Descripcion FROM historia_usuario WHERE id_pro = '$id_estado' ORDER BY Descripcion ASC";
$resultadoM=mysqli_query($conexion,$queryM);

$html= "<option value='0'>Seleccione historia</option>";

while($filaM=mysqli_fetch_array($resultadoM,MYSQLI_ASSOC)){

  $html.= "<option value='".$filaM['id_historia']."'>".$filaM['Descripcion']."</option>";
}

echo $html;
?>
