<!-- quick email widget -->
<?php include_once ("../../Funciones/sessiones.php"); ?>
<div id="seccion-comuna">
	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Gestión de Medicos</i>
        <!-- tools box -->
        <div class="pull-right box-tools">
        	<button class="btn btn-info btn-sm btncerrar2" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times">Cerrar</i></button>
        </div><!-- /. tools -->
    </div>
    <div class="box-body">

		<div align ="center">
				<div id="actual"> 
				</div>
		</div>


        <div class="panel-group"><div class="panel panel-primary">
            <div class="panel-heading">Datos Medicos</div>
            <div class="panel-body">
    
                <form class="form-horizontal" role="form"  id="fmedicos">


 					<div class="form-group">
                        <label class="control-label col-sm-2" for="id_medico">Id Medico:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_medico" name="id_medico" placeholder="Ingrese Id"
                            value = "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nom_medico">Nombre del medico:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nom_medico" name="nom_medico" placeholder="Ingrese Nombre del medico.. "
                            value = "">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="cedu_medico">Numero Cedula:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="cedu_medico" name="cedu_medico" placeholder="Ingrese cedula.. "
                            value = "">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Especialista">Especialista en:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Especialista" name="Especialista" placeholder="Ingrese especialización.. "
                            value = "">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="celu_medico">Celular:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="celu_medico" name="celu_medico" placeholder="Ingrese Numero de celular.. "
                            value = "">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="correo_medico">Correo Electronico:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="correo_medico" name="correo_medico" placeholder="Ingrese Correo.. "
                            value = "">
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
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="grabar" class="btn btn-primary" data-toggle="tooltip" title="Guardar Medico">Guardar Medico</button>
                            <button type="button" id="cerrar" class="btn btn-success btncerrar2" data-toggle="tooltip" title="Cancelar">Cancelar :(</button>
                        </div>
                    </div>

					<input type="hidden" id="nuevo" value="nuevo" name="accion"/>
			</fieldset>

		</form>
	</div>
</div>