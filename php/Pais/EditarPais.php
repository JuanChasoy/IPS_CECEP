<?php include_once ("../../Funciones/sessiones.php"); ?>
<!-- quick email widget -->


    <div class="box-body">
        <div class="panel-group"><div class="panel panel-primary">
            <div class="panel-heading">Datos</div>
            <div class="panel-body">    
                <form class="form-horizontal" role="form"  id="fpais">
 					<div class="form-group">
                        <label class="control-label col-sm-2" for="id_pais">Codigo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_pais" name="id_pais" 
                            value = "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nom_pais">Nombre Pais:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nom_pais" name="nom_pais" 
                            value = "">
                        </div>
                    </div>
					

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="actualizar" class="btn btn-primary" data-toggle="tooltip" title="Actualizar Pais">Actualizar Pais</button>
                            <button type="button" id="cerrar" class="btn btn-success btncerrar" data-toggle="tooltip" title="Cancelar">Cancelar</button>
                        </div>
                    </div>

					<input type="hidden" id="nuevo" value="editar" name="accion"/>
			</fieldset>

		</form>
	</div>
