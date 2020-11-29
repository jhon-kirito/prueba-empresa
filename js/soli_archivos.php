<?php
session_start();
if(!isset($_SESSION["ROL"])){
  header("location:../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">

  
  <title></title>
  <script language="javascript" src="../js/jquery-3.4.1.min.js"></script>

</head>

      <div class="container-fluid" id="container">
        <center><section class="principal">
        <div class="form" id="estilo">
  			<label for="caja_busqueda_subir" >BUSCAR</label>
  			<input type="text" name="caja_busqueda_subir" id="caja_busqueda_subir" value="">
  		</div>
      <div id="datos2">

        </div>
  	</section>
  	<script src="../js/jquery-3.4.1.min.js"></script>
  	<script src="../js/mainsolicitudfn.js"></script>
     <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
      <script type="text/javascript">
        $(document).ready(function() {
          setTimeout(function() {
            $(".content").fadeOut(1500);
          },3000);
        });
      </script>
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
