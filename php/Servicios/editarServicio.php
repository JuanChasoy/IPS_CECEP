<div id="seccion-servicio">
	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Gestión de Servicios</i>
        <div class="pull-right box-tools">
        	<button class="btn btn-info btn-sm btncerrar2" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times">Cerrar</i></button>
        </div>
    </div>
    <div class="box-body">

		<div align ="center">
				<div id="actual"> 
				</div>
		</div>


        <div class="panel-group"><div class="panel panel-primary">
            <div class="panel-heading">Datos Servicios</div>
            <div class="panel-body">
    
                <form class="form-horizontal" role="form"  id="fservicios">


 					<div class="form-group">
                        <label class="control-label col-sm-2" for="id_servicio">Id:</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="id_servicio" name="id_servicio" placeholder="Ingrese Codigo"
                              value = "" readonly="true">
                          </div>
                      </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="tipo_servicio">Tipo servicio:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tipo_servicio" name="tipo_servicio" placeholder="Ingrese Nombre"
                            value = "">
                        </div>
                    </div>

                    <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="actualizar" data-toggle="tooltip" title="Actualizar cita" class="btn btn-primary">Actualizar cita</button>
                            <button type="button" id="cancelar" data-toggle="tooltip" title="Cancelar Edición" class="btn btn-success btncerrar2"> Cancelar </button>
                        </div>
                    </div>

					<input type="hidden" id="editar" value="editar" name="accion"/>
			</fieldset>

		</form>
  </div>
    <input type="hidden" id="pagina" value="editar" name="editar"/>
</div>