<?php include_once ("../../../Funciones/sessiones.php"); ?>
      
      <h1>
        Gestión de
        <small> Sedes </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Sedes</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Listado de Sedes</h3>
              <a href="Reportes/Reports/reporteSedes.php" class="btn-report">Ver Reporte</a>
              <div class="box-tools pull-right">
                  <button class="btn btn-info btn-sm" id="nuevo"  data-toggle="tooltip" 
                      
                      <a href="./reportes/Reports/reporteSedes.php" class="btn btn-info">reportes</a>
              </div>
            </div> 
           
        
            <!-- /.box-header -->
         <div class="box-body">
            <div id="editar"></div>
            <div id="listado">
              <table id="tabla" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>codigo sede</th>
                  <th>nombre sede</th>
                  <th>direccion</th>
                  <th>telefono</th>
                  <th>ciudad</th>
                  <th>codigo sede</th>
                </tr>
                </thead>
                <tbody>
                
                </tbody>
                <tfoot>
                <tr>
                <th>codigo sede</th>
                  <th>nombre sede</th>
                  <th>direccion</th>
                  <th>telefono</th>
                  <th>ciudad</th>
                  <th>codigo sede</th>

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

<script src="Templates/Cliente/Sedes/FuncionesSedes.js"></script>
<!-- Funciones de Lógica de neogcio -->
<script>
    $(document).ready(sedes);
</script>

