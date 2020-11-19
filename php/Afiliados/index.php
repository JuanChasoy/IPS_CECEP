<?php include_once ("../../Funciones/sessiones.php"); ?>
      
      <h1>
        Gestión de
        <small>  Afiliados</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Afiliados</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Listado de Afiliados</h3>
              <a href="Reportes/Reports/reportesAfiliados.php" class="btn-report">Ver Reporte</a>
              <div class="box-tools pull-right">
                  <button class="btn btn-info btn-sm" id="nuevo"  data-toggle="tooltip" 
                      title="Nuevo afiliado"><i class="fa fa-plus" aria-hidden="true"></i></button> 
                      <a href="./reportes/Reports/reporteAfiliados.php" class="btn btn-info">reportes</a>
              </div>
            </div>
           
        
            <!-- /.box-header -->
            <div class="box-body">
            <div id="editar"></div>
            <div id="listado">
              <table id="tabla" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Código afiliado</th>
					<th>Nombre </th>
					<th>Cedula</th>
                    <th>Celular</th>
					<th>Tipo afiliacion </th>
					<th>Sede</th>
					<th>Eliminar</th>
					<th>Modificar</th>
                </tr>
                </thead>
                <tbody>
                
                </tbody>
                <tfoot>
                <tr>
                    <th>Código afiliado</th>
					<th>Nombre </th>
					<th>Cedula</th>
                    <th>Celular</th>
					<th>Tipo afiliacion </th>
					<th>Sede</th>
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

  </div><!-- /.box-body -->  
	<script src="js/FuncionesAfiliados.js"></script>
</div>
<script>
    $(document).ready(afiliados);
</script>
