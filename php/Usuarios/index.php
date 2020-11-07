<?php include_once ("../../Funciones/sessiones.php"); ?>
      
      <h1>
        Gestión de
        <small>  Usuarios</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Usuarios</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Listado de Usuarios</h3>
              <div class="box-tools pull-right">
                  <button class="btn btn-info btn-sm" id="nuevo"  data-toggle="tooltip" 
                      title="Nuevo Usuario"><i class="fa fa-plus" aria-hidden="true"></i></button> 
              </div>
            </div>
           
        
            <!-- /.box-header -->
            <div class="box-body">
            <div id="editar"></div>
            <div id="listado">
              <table id="tabla" class="table table-bordered table-striped">
                <thead>
                <tr>
					<th>Id Medico</th>
          <th>Nombre</th>
          <th>Especialista</th>
          <th>Celular</th>
          <th>Cedula</th>
					<th>Correo</th>
					<th>Sede</th>
					<th>Eliminar</th>
					<th>Modificar</th>
                </tr>
                </thead>
                <tbody>
                
                </tbody>
                <tfoot>
                <tr>
          <th>Id Medico</th>
          <th>Nombre</th>
          <th>Especialista</th>
          <th>Celular</th>
          <th>Cedula</th>
					<th>Correo</th>
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
	<script src="js/funcionesMedicos.js"></script>
</div>
<script>
    $(document).ready(medicos);
</script>