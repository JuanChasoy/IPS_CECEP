<div id="seccion-comuna">
	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Gestión de Citas</i>
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
            <div class="panel-heading">Datos Citas</div>
            <div class="panel-body">
    
                <form class="form-horizontal" role="form"  id="fcitas">


 					            <div class="form-group">
                        <label class="control-label col-sm-2" for="id_cita">Id:</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="id_cita" name="id_cita" placeholder="Ingrese Codigo"
                              value = "" readonly="true">
                          </div>
                      </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nom_usu_cita">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nom_usu_cita" name="nom_usu_cita" placeholder="Ingrese Nombre"
                            value = "">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="cedu_usu_cita">Cedula:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="cedu_usu_cita" name="cedu_usu_cita" placeholder="Ingrese Cedula"
                            value = "">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="correo_cita">Correo:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="correo_cita" name="correo_cita" placeholder="Ingrese correo"
                            value = "">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="id_servicio">Servicio:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="id_servicio" name="id_servicio">
                         
							</select>	
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="id_sede">Sede:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="id_sede" name="id_sede">
                         
							</select>	
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="id_medico">Medico:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="id_medico" name="id_medico">
                         
							</select>	
                        </div>
                    </div>

                    <div class="form-group">
                            <label class="control-label col-sm-2" for="fecha">Fecha:</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Ingrese la fecha de la cita" value="">
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