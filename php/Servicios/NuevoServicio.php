<!-- quick email widget -->
<?php include_once ("../../Funciones/sessiones.php"); ?>
<div id="seccion-comuna">
	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Gestión de Servicios</i>
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
            <div class="panel-heading">Datos Servicios</div>
            <div class="panel-body">
    
                <form class="form-horizontal" role="form"  id="fservicios">


 					<div class="form-group">
                        <label class="control-label col-sm-2" for="id_servicio">Id Servicio::</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_servicio" name="id_servicio" placeholder="Ingrese Codigo"
                            value = "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="tipo_servicio">Nombre del servicio:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tipo_servicio" name="tipo_servicio" placeholder="Ingrese Nombre del servicio"
                            value = "">
                        </div>
                    </div>
	
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="id_sede">sede:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="id_sede" name="id_sede">
                         
							</select>	
                        </div>
                    </div>

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="grabar" class="btn btn-primary" data-toggle="tooltip" title="Guardar Servicio">Guardar Servicio</button>
                            <button type="button" id="cerrar" class="btn btn-success btncerrar2" data-toggle="tooltip" title="Cancelar">Cancelar</button>
                        </div>
                    </div>

					<input type="hidden" id="nuevo" value="nuevo" name="accion"/>
			</fieldset>

		</form>
	</div>
</div>