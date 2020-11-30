<?php
session_start();
$id=$_SESSION['id'];
include 'conecta.php';
$ok=$_SESSION['yeah'];
$salida="";
$query="SELECT DISTINCT id_sol,empresa.nit,Descripcion,nombre,fecha_creacion1,nombre1,estado,fecha_creacion,comentarios,id_pc FROM usuario_pc
INNER JOIN historia_usuario ON usuario_pc.id_c=historia_usuario.id_historia
INNER JOIN em_pro ON historia_usuario.id_pro=em_pro.id_emp
INNER JOIN proyecto ON em_pro.id_pr=proyecto.id_p
INNER JOIN empresa ON em_pro.nit=empresa.nit
INNER JOIN solicitud ON usuario_pc.id=solicitud.id_sol where id_sol='$ok'";
$resultado=$conexion->query($query);
if($resultado->num_rows >0){
  $salida.=" <form class='' action='mod_estado.php' method='post'>
  <div class='divtable'>
  <table class='tabla_datos'>
    <thead>
      <tr>
      <td>EMPRESA</td>
      <td>PROYECTO</td>
      <td>HISTORIA USUARIO</td>
      <td>ESTADO</td>
      <td>CAMBIAR ESTADO</td>
      </tr>
    </thead>
    <tbody>";
      while ($fila=mysqli_fetch_array($resultado)){
        $salida.=" <tr>
        <input type='hidden' name='numero' value=".$fila['id_sol']."></td>



        <td>".$fila['nombre']."</td>
        <td>".$fila['nombre1']."</td>
        <td>".$fila['Descripcion']."</td>
        <td>".$fila['estado']."</td>


        <td><select class='' name='estado'>
              <option value=''>Seleccione el Estado</option>
              <option value='en proceso'>En Proceso</option>
              <option value='Terminada'>Terminada</option>
              <option value='Cancelada'>Cancelada</option>
          </select>
        </tr>
  </form>";
      }
    $salida.=" </tbody> </table> </div>
    <td>  <input type='submit' name='ok' value='MODIFICAR'></td>";
}
else {
$salida.="NO HAY DATOS";
}
echo  $salida;
$conexion->close();
?>
