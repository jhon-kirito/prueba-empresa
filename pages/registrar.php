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

  <title>Registro</title>




  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">

</head>
<body id="page-top">
  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="">Registro</a>



    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">


        </div>
      </div>
    </form>

    <!-- Navbar -->


  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="regresar.php">
          <span>REGRESAR</span></a>
      </li>
    </ul>

    <div id="content-wrapper2">


      <div class="container-fluid">


  <div class="container">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        setTimeout(function() {
          $(".content").fadeOut(2500);
        },5000);
      });
    </script>

    <?php
      if(isset($_SESSION['error1']) || !empty($_SESSION['error1'])){
        echo "<div class='content'><h4>".$_SESSION['error1']."</h4></div>";
      }elseif(isset($_SESSION['aviso1']) || !empty($_SESSION['aviso1'])){
        echo "<div class='content'><h4>".$_SESSION['aviso1']."</h4></div>";
      }
      session_unset();
    ?>
    <form class="" action="validar.php" method="post" enctype="multipart/form-data">


      <div class="card card-register mx-auto mt-5" style="background-color:#b3f0ff;">

        <div class="card-header">INFORMACIÓN DE CONTACTO</div>
        <div class="card-body">


          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">

                    <select class="" name="tipo" required="required" >
                      <option value="">Tipo Documento* </option>
                        <option value="CC">CC-Cédula de Ciudadanía</option>
                          <option value="CE">CE-Cédula de Extranjería</option>

                    </select>
                    <br>
                    <br>
                    <br>

                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="cedula" class="form-control" name="cedula" placeholder="Cedula" required="required" autofocus="autofocus">
                  <label for="cedula">Cedula</label>
                </div>
              </div>
            </div>
          </div>

       <div class="form-group">
         <div class="form-row">
           <div class="col-md-6">
             <div class="form-label-group">
               <input type="text" id="namexd" name="name" class="form-control" placeholder="Nombre y Apellidos" >
               <label for="namexd">Nombre</label>
             </div>
           </div>
           <div class="col-md-6">
             <div class="form-label-group">
               <input type="text" id="Direccion" name="direccion" class="form-control" placeholder="Direccion">
               <label for="Direccion">Dirección</label>
             </div>
           </div>
         </div>
       </div>

                 <div class="form-group">
                   <div class="form-row">
                     <div class="col-md-6">
                       <div class="form-label-group">

                         <input type="text" id="email" name="email" class="form-control" placeholder="Email" >
                         <label for="email">Email</label>

                       </div>
                     </div>
                     <?php
       include 'conecta.php';
$query = "SELECT * FROM empresa ORDER BY nombre";
$resultado=mysqli_query($conexion,$query);

?>
                     <div class="col-md-6">
                       <div class="form-label-group">
                         <select class="" name="compa" required="required" >
                           <option value="">Compañia </option>
                           <?php  $i=0;
       while($fila=mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
          ?>

           <option value="<?php echo $fila['nit']; ?>"><?php echo $fila['nombre']; ?></option>
       <?php
       } ?>
                         </select>

                         <br>
                         <br>
                         <br>

                       </div>
                     </div>
                   </div>
                 </div>

        <br>
       <div class="form-label-group">
         <input type="text" id="usuario" name="usuario" class="form-control" placeholder="usuario" required="required">
         <label for="usuario">Usuario</label>
       </div>
        <br>
       <div class="form-label-group">
         <input type="password" id="confirmPassword" name="contraseña" class="form-control" placeholder="Confirm password" required="required">
         <label for="confirmPassword">Nueva Contraseña</label>
       </div>
       <br>
       <div class="form-label-group">
         <input type="password" id="NW" name="contra" class="form-control" placeholder="Confirm password" required="required">
         <label for="NW">Confirmar Contraseña</label>
       </div>
     </div>
       </div>

        <input class="btn btn-primary btn-block" type="submit" name="ok" value="SIGUIENTE" style="background-color:#00b300;">
    </form>


  </div>
</div>
</div>
</div>
 </div>
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

  <!-- Bootstrap core JavaScript-->

</body>

</html>
