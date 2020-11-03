<!-- quick email widget -->
<?php include_once ("../../Funciones/sessiones.php"); ?>
<div id="seccion-comuna">
	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Gestión de Sedes</i>
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
            <div class="panel-heading">Datos Sedes</div>
            <div class="panel-body">
    
                <form class="form-horizontal" role="form"  id="fsedes">


 					<div class="form-group">
                        <label class="control-label col-sm-2" for="id_sede">Id sede::</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_sede" name="id_sede" placeholder="Ingrese Codigo"
                            value = "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nom_sede">Nombre de la Sede:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nom_sede" name="nom_sede" placeholder="Ingrese Nombre de la sede"
                            value = "">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="direc_sede">Direccion:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="direc_sede" name="direc_sede" placeholder="Ingrese direccion"
                            value = "" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="tele_sede">Telefono:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tele_sede" name="tele_sede" placeholder="Ingrese Nombre de la ciudad"
                            value = "">
                        </div>
                    </div>
	
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="id_ciudad">Ciudad:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="id_ciudad" name="id_ciudad">
                         
							</select>	
                        </div>
                    </div>

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="grabar" class="btn btn-primary" data-toggle="tooltip" title="Guardar Sede">Guardar Sede</button>
                            <button type="button" id="cerrar" class="btn btn-success btncerrar2" data-toggle="tooltip" title="Cancelar">Cancelar</button>
                        </div>
                    </div>

					<input type="hidden" id="nuevo" value="nuevo" name="accion"/>
			</fieldset>

		</form>
	</div>
</div>