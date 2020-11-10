<?php
session_start();

/*if (!isset($_SESSION['rol']) || $_SESSION['rol'] != 1) {
  header('location: ./index.php');

}*/

    if (isset($_SESSION['nombre_rol']) && ($_SESSION['nombre_rol'] == 'Medicos')) {
      //include_once("./Funciones/sessiones.php");
      include_once('./Templates/header.php');
      include_once('./Templates/barra.php');
      include_once('./Templates/Medico/navegacion_medico.php');
    }else{
      header('location: ./index.php');
    }

      





/*include_once("./Funciones/sessiones.php");
include_once('./Templates/header.php');

include_once('./Templates/barra.php');

include_once('./Templates/navegacion.php');*/

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include_once('././Templates/footer.php')
?>