<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">


  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <script language="javascript" src="../js/jquery-3.4.1.min.js"></script>

    <script language="javascript">
   $(document).ready(function(){
     $("#cbx_historia").hide();
     $("#cbx_proyecto").change(function () {
       $("#cbx_proyecto option:selected").each(function () {
         id_proyecto= $(this).val();
         $.post("getproyecto.php", { id_proyecto: id_proyecto
         },
         function(data){
          $("#cbx_historia").show();
           $("#cbx_historia").html(data);
         });
       });
     })
   });
   </script>


  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="">Usuario</a>



    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">


        </div>
      </div>
    </form>


    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="cerrar.php" >Cerrar Sesión</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">





      <li class="nav-item">
        <a class="nav-link" href="form_tickets.php">
          <span>TICKET ASOCIADO</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="form_nuevo.php">
          <span>CREAR TICKET</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="estado.php">
          <span>ESTADO TICKETS</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="cerrar.php">
          <span>CERRAR SESIÓN</span></a>
      </li>

  </ul>
    <div id="content-wrapper">

      <div class="container-fluid">

        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
        <script type="text/javascript">
          $(document).ready(function() {
            setTimeout(function() {
              $(".content").fadeOut(2500);
            },5000);
          });
        </script>

        <?php

          if(isset($_SESSION['error3']) || !empty($_SESSION['error3'])){
            echo "<div class='content'><h4>".$_SESSION['error3']."</h4></div>";
          }elseif(isset($_SESSION['aviso4']) || !empty($_SESSION['aviso4'])){
            echo "<div class='content'><h4>".$_SESSION['aviso4']."</h4></div>";
          }

        ?>
        <form class="" action="guardar.php" method="post">


   <?php
   $id=$_SESSION['id'];
  include 'conecta.php';
 $query1 = "SELECT * FROM usuario_com where id_user='$id'";
 $resultado1=mysqli_query($conexion,$query1);
 while($fila=mysqli_fetch_array($resultado1,MYSQLI_ASSOC)){
   $nit=$fila['nit'];
 }

 $query = "SELECT nombre1,id_emp FROM em_pro INNER JOIN proyecto ON em_pro.id_pr=proyecto.id_p
 where nit='$nit'";
 $resultado=mysqli_query($conexion,$query);
?>

       seleccionar proyecto
       <br>
         <select name="cbx_proyecto" id="cbx_proyecto" required="required" >
               <option value="">Seleccione proyecto*</option>
<?php
    while($fila=mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
       ?>
        <option value="<?php echo $fila['id_emp']; ?>"><?php echo $fila['nombre1']; ?></option>
    <?php }
     ?>
    </select>
<br>
<br>
              seleccionar historia de usuarios
                <br>
             <select name="cbx_historia" id="cbx_historia" required="required"></select>

             <br>
                           comentarios
                             <br>
      <textarea name='comentarios' rows='8' cols='80'></textarea><br>
      <input class="btn btn-primary btn-block" type="submit" name="ok" value="SIGUIENTE" style="background-color:#00b300;">

</form>
  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="../vendor/chart.js/Chart.min.js"></script>
  <script src="../vendor/datatables/jquery.dataTables.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="../js/demo/datatables-demo.js"></script>
  <script src="../js/demo/chart-area-demo.js"></script>

</body>

</html>
