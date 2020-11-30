<?php
session_start();
$id=$_SESSION['id'];
include 'conecta.php';
$salida="";
$sal="";
$query="SELECT DISTINCT id_sol,empresa.nit,Descripcion,nombre,fecha_creacion1,nombre1,estado,fecha_creacion,comentarios,id_pc FROM usuario_pc
INNER JOIN historia_usuario ON usuario_pc.id_c=historia_usuario.id_historia
INNER JOIN em_pro ON historia_usuario.id_pro=em_pro.id_emp
INNER JOIN proyecto ON em_pro.id_pr=proyecto.id_p
INNER JOIN empresa ON em_pro.nit=empresa.nit
INNER JOIN solicitud ON usuario_pc.id=solicitud.id_sol where ced='$id'";

if(isset($_POST['consulta'])){
  $q=$conexion->real_escape_string($_POST['consulta']);
  $query="SELECT DISTINCT id_sol,empresa.nit,Descripcion,nombre,fecha_creacion1,nombre1,estado,fecha_creacion,comentarios,id_pc FROM usuario_pc
  INNER JOIN historia_usuario ON usuario_pc.id_c=historia_usuario.id_historia
  INNER JOIN em_pro ON historia_usuario.id_pro=em_pro.id_emp
  INNER JOIN proyecto ON em_pro.id_pr=proyecto.id_p
  INNER JOIN empresa ON em_pro.nit=empresa.nit
  INNER JOIN solicitud ON usuario_pc.id=solicitud.id_sol where ced='$id' LIKE '%".$q."%' OR estado LIKE '%".$q."%' OR fecha_creacion LIKE '%".$q."%' OR comentarios LIKE '%".$q."%'
  OR Descripcion LIKE '%".$q."%' OR fecha_creacion1 LIKE '%".$q."%'";
$resultado=$conexion->query($query);
if($resultado->num_rows ==1){
$sal.="
";
}else{
$sal.=" ";
}
}
$resultado=$conexion->query($query);
if ($resultado->num_rows >0){
  $salida.="<div class='divtable'>
  <table class='tabla_datos'>

             <thead>
               <tr>
                 <td>EMPRESA</td>
                 <td>PROYECTO</td>
                 <td>FECHA CREACION</td>
                 <td>HISTORIA USUARIO</td>
                 <td>ESTADO</td>
                 <td>FECHA CREACION</td>
                 <td>COMENTARIOS</td>
                 <td>MODIFICAR</td>
               </tr>
             </thead>

                 <tbody>";
                   while ($fila=mysqli_fetch_array($resultado)){
?>
<form class='' action='update_estado.php' method='post'>
<?php
                   $salida.= "
                <tr>
                    <input type='hidden' name='numero' value=".$fila['id_pc']."></td>
                    <td><a title='De clic aqui para mas informacion' href='ver_detalle_empresa.php?id=".$fila['nit']."' >".$fila['nombre']."</a></td>
                    <td>".$fila['nombre1']."</td>

                     <td>".$fila['fecha_creacion1']."</td>

                    <td>".$fila['Descripcion']."</td>
                    <td>".$fila['estado']."</td>
                    <td>".$fila['fecha_creacion']."</td>
                    <td>".$fila['comentarios']."</td>
                    <td><a title='De clic aqui para mas informacion' href='update_estado.php?id=".$fila['id_sol']."' >modificar</a></td>





                       </tr>";
                     }

                     $salida.=" </tbody> </table>";
    }
    else {
    $salida.="NO HAY DATOS";
    }

    echo  $salida;
    echo  $sal;

    $conexion->close();
    ?>
