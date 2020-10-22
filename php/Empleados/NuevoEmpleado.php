<!-- quick email widget -->
<div id="seccion-comuna">
	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Gestión de Empleados</i>
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
            <div class="panel-heading">Datos Empleados</div>
            <div class="panel-body">
    
                <form class="form-horizontal" role="form"  id="fempleados">


 					<div class="form-group">
                        <label class="control-label col-sm-2" for="id_empleado">Id Empleado::</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_empleado" name="id_empleado" placeholder="Ingrese Codigo"
                            value = "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nom_empleado">Nombre del empleado:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nom_empleado" name="nom_empleado" placeholder="Ingrese Nombre de empleado"
                            value = "">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="cedu_emplado">Nro Cedula:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="cedu_emplado" name="cedu_emplado" placeholder="Ingrese cedula "
                            value = "">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="dire_empleado">Direccion:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="dire_empleado" name="dire_empleado" placeholder="Ingrese direccion del empleado"
                            value = "">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="celu_empleado">Celular:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="celu_empleado" name="celu_empleado" placeholder="Ingrese Numero de celular"
                            value = "">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email_empleado">Email:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email_empleado" name="email_empleado" placeholder="Ingrese Email"
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
                            <button type="button" id="grabar" class="btn btn-primary" data-toggle="tooltip" title="Guardar Empleado">Guardar Empleado</button>
                            <button type="button" id="cerrar" class="btn btn-success btncerrar2" data-toggle="tooltip" title="Cancelar">Cancelar</button>
                        </div>
                    </div>

					<input type="hidden" id="nuevo" value="nuevo" name="accion"/>
			</fieldset>

		</form>
	</div>
</div>