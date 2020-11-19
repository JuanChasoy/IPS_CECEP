<?php include_once ("../../Funciones/sessiones.php"); ?>
      
      <h1>
        Gestión de
        <small>  Medicamentos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Medicamentos</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Listado de Medicamentos</h3>
              <a href="Reportes/Reports/reporteMedicamentos.php" class="btn-report">Ver Reporte</a>
              <div class="box-tools pull-right">
                  <button class="btn btn-info btn-sm" id="nuevo"  data-toggle="tooltip" 
                      title="Nuevo Empleado"><i class="fa fa-plus" aria-hidden="true"></i></button>
                      <a href="./reportes/Reports/reporteMedicamentos.php" class="btn btn-info">reportes</a>
              </div>
            </div>
           
        
            <!-- /.box-header -->
            <div class="box-body">
            <div id="editar"></div>
            <div id="listado">
              <table id="tabla" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>codigo medicamento</th>
                  <th>nombre medicamento</th>
                  <th>Eliminar</th>
                  <th>Modificar</th>
                </tr>
                </thead>
                <tbody>
                
                </tbody>
                <tfoot>
                <tr>
                  <th>codigo medicamento</th>
                  <th>nombre medicamento</th>
                  <th>Eliminar</th>
                  <th>Modificar</th>

                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  </div>
  <!-- /.content-wrapper -->

<script src="js/funcionesMedicamentos.js"></script>
<!-- Funciones de Lógica de neogcio -->
<script>
    $(document).ready(medicamentos);
</script>


