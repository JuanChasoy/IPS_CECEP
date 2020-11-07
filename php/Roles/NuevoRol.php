<?php include_once ("../../Funciones/sessiones.php"); ?>
<!-- quick email widget -->

    <div class="box-body">
        <div class="panel-group"><div class="panel panel-primary">
            <div class="panel-heading">Datos</div>
            <div class="panel-body">    
                <form class="form-horizontal" role="form"  id="frol">
 					<div class="form-group">
                        <label class="control-label col-sm-1" for="id_rol">Codigo Rol:</label>
                        <div class="input-group col-sm-10">
                            <span class="input-group-addon"></span>
                            <input type="text" class="form-control " id="id_rol" name="id_rol" placeholder="codigo Rol"
                            value = "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-1" for="nom_rol">Nombre Pais:</label>
                        <div class="input-group col-sm-10">
                            <span class="input-group-addon"></span>
                            <input type="text" class="form-control" id="nom_rol" name="nom_rol" placeholder="Ingrese Tipo de rol"
                            value = "">
                        </div>                    
                    </div>
					
					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="grabar" class="btn btn-primary" data-toggle="tooltip" title="Grabar Rol">Grabar Rol</button>
                            <button type="button" id="cerrar" class="btn btn-success btncerrar" data-toggle="tooltip" title="Cancelar">Cancelar</button>
                        </div>
                    </div>

					<input type="hidden" id="nuevo" value="nuevo" name="accion"/>
			</fieldset>

		</form>
	</div>
