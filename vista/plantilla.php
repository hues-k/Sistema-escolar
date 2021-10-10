<?php 
session_start();
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Examen Practico</title>
	<link href="vista/css/estilo.css" type="text/css" media="" rel="stylesheet">

	  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="vista/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="vista/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="vista/bower_components/Ionicons/css/ionicons.min.css">

  
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

   <!-- DataTables -->
  <link rel="stylesheet" href="vista/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="vista/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">

  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="vista/plugins/iCheck/all.css">

   <!-- Daterange picker -->
  <link rel="stylesheet" href="vista/bower_components/bootstrap-daterangepicker/daterangepicker.css">

  <!-- Morris chart -->
  <link rel="stylesheet" href="vista/bower_components/morris.js/morris.css">

  <!--=====================================
  PLUGINS DE JAVASCRIPT
  ======================================-->


<script src="vista/js/jquery-3.4.1.min.js"></script>

  <!-- jQuery 3 -->
  <script src="vista/bower_components/jquery/dist/jquery.min.js"></script>

  
  <!-- Bootstrap 3.3.7 -->
  <script src="vista/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- FastClick -->
  <script src="vista/bower_components/fastclick/lib/fastclick.js"></script>
   <!-- DataTables -->
  <script src="vista/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="vista/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="vista/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
  <script src="vista/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>


   <!-- SlimScroll -->
<script src="vista/bower_components/jquery-slimscroll/jquery.slimscroll.min.js">
</script>

  <!-- SweetAlert 2 -->
  <script src="vista/plugins/sweetalert2/sweetalert2.all.js"></script>
   <!-- By default SweetAlert2 doesn't support IE. To enable IE 11 support, include Promise polyfill:-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

  <!-- iCheck 1.0.1 -->
  <script src="vista/plugins/iCheck/icheck.min.js"></script>

  <!-- InputMask -->
  <script src="vista/plugins/input-mask/jquery.inputmask.js"></script>
  <script src="vista/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
  <script src="vista/plugins/input-mask/jquery.inputmask.extensions.js"></script>

  <!-- jQuery Number -->
  <script src="vista/plugins/jqueryNumber/jquerynumber.min.js"></script>

  <!-- daterangepicker http://www.daterangepicker.com/-->
  <script src="vista/bower_components/moment/min/moment.min.js"></script>
  <script src="vista/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

  <!-- Morris.js charts http://morrisjs.github.io/morris.js/-->
  <script src="vista/bower_components/raphael/raphael.min.js"></script>
  <script src="vista/bower_components/morris.js/morris.min.js"></script>
  <!-- ChartJS http://www.chartjs.org/-->
  <script src="vista/bower_components/Chart.js/Chart.js"></script>

</head>


<body class="login-page">
	<?php 

  if (isset($_SESSION["iniciarSesion"])&&$_SESSION["iniciarSesion"]=="ok") {
    # code...
  
  echo '<div>';

/*-- Inicia cabezote --*/
	include "modulos/cabezote.php";
/*-- FIN cabezote --*/

/*-- Inicia botonera --*/
	include "modulos/botonera.php";
/*-- Fin botonera --*/
	 ?>

<section class="principal content" >

	<?php

  if(isset($_GET["ruta"])){
    if($_GET["ruta"] == "inicio"||
      $_GET["ruta"] == "alumnos"||
      $_GET["ruta"] == "materias"||
      $_GET["ruta"] == "inscripcion"||
      $_GET["ruta"] == "usuarios"||
      $_GET["ruta"] == "salir"
    )
    include "modulos/".$_GET["ruta"].".php" ;


  }


	echo '</div>';

  }
  else{
    include "modulos/login.php";
      }
	 ?>
	
</section>


 <script src="vista/js/plantilla.js"></script>
  <script src="vista/js/alumno.js"></script>
  <script src="vista/js/validaciones.js"></script>
</body>
</html>