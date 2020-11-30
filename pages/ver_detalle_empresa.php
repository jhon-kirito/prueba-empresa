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
   <link rel="stylesheet" href="../css/style3.css">

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Usuario</a>


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
        <a class="nav-link dropdown-toggle" href="cerrar.php" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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




    <div id="content-wrapper2">

      <div class="container-fluid">
    <form class="" action="estado.php" method="post">
      <input type="submit" name="" value="Regresar">
    </form><br>
        <?php
        include("conecta.php");
            $id = $_GET['id'];
            $searchCandidato = "SELECT nit,nombre,telefono,direccion,email from empresa where nit='$id'";
            $searchCandidato = mysqli_query($conexion,$searchCandidato);

            echo "<center><table style='width:100%'>";
            echo "<tr class='caption'>";
            echo "  <td text-align='center'>Empresa</td>";
            echo "</tr></center>";
            echo "</table>";
            echo "<div class='divtable'><table class='table2'>";
            echo "<tr class='odd'>";
            echo "  <td>Nit</td>";
            echo "  <td>Nombre</td>";
            echo "  <td>Telefono</td>";
            echo "  <td>Direccion</td>";
            echo "  <td>email</td>";
            echo "</tr>";
            $i=0;
            while($searchCandidato1 = mysqli_fetch_array($searchCandidato,MYSQLI_ASSOC)){
              $i+=1;
              if($i%2==0){
                echo "<tr class='odd2'>";
              }else{
                echo "<tr class=''>";
              }
              echo "<td>",$searchCandidato1['nit'],"</td>";
              echo "<td>",$searchCandidato1['nombre'],"</td>";
              echo "<td>",$searchCandidato1['telefono'],"</td>";
              echo "<td>",$searchCandidato1['direccion'],"</td>";
              echo "<td>",$searchCandidato1['email'],"</td>";
              echo "</tr>";
            }
            echo "</table></div>";
        ?>

    </div>
  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="../vendor/chart.js/Chart.min.js"></script>
  <script src="../vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="../js/demo/datatables-demo.js"></script>
  <script src="../js/demo/chart-area-demo.js"></script>

</body>

</html>
