<?php include_once ("../../Funciones/sessiones.php"); ?>
<!-- quick email widget -->

    <div class="box-body">
        <div class="panel-group"><div class="panel panel-primary">
            <div class="panel-heading">Datos</div>
            <div class="panel-body">    
                <form class="form-horizontal" role="form"  id="fpais">
 					<div class="form-group">
                        <label class="control-label col-sm-1" for="id_pais">Codigo Pais:</label>
                        <div class="input-group col-sm-10">
                            <span class="input-group-addon"></span>
                            <input type="text" class="form-control " id="id_pais" name="id_pais" placeholder="codigo pais"
                            value = "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-1" for="nom_pais">Nombre Pais:</label>
                        <div class="input-group col-sm-10">
                            <span class="input-group-addon"></span>
                            <input type="text" class="form-control" id="nom_pais" name="nom_pais" placeholder="Ingrese Nombre de pais"
                            value = "">
                        </div>                    
                    </div>
					
					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="grabar" class="btn btn-primary" data-toggle="tooltip" title="Grabar Medicamento">Grabar Pais</button>
                            <button type="button" id="cerrar" class="btn btn-success btncerrar" data-toggle="tooltip" title="Cancelar">Cancelar</button>
                        </div>
                    </div>

					<input type="hidden" id="nuevo" value="nuevo" name="accion"/>
			</fieldset>

		</form>
	</div>
