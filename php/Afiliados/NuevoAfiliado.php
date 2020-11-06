<!-- quick email widget -->
<?php include_once ("../../Funciones/sessiones.php"); ?>
<div id="seccion-comuna">
	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Gestión de Afiliados</i>
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
            <div class="panel-heading">Datos Afiliados</div>
            <div class="panel-body">
    
                <form class="form-horizontal" role="form"  id="fafiliados">


 					<div class="form-group">
                        <label class="control-label col-sm-2" for="id_afiliado">Id afiliado:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_afiliado" name="id_afiliado" placeholder="Ingrese Codigo"
                            value = "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nom_afiliado">Nombre del afiliado:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nom_afiliado" name="nom_afiliado" placeholder="Ingrese Nombre del afiliado"
                            value = "">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="cedu_afiliado">Numero de cedula:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="cedu_afiliado" name="cedu_afiliado" placeholder="Ingrese cedula"
                            value = "">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="celu_afiliado">Numero de celular:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="celu_afiliado" name="celu_afiliado" placeholder="Ingrese celular"
                            value = "">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="tipo_afiliacion">Tipo de afiliacion:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tipo_afiliacion" name="tipo_afiliacion" placeholder="Ingrese tipo de afiliacion"
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
                            <button type="button" id="grabar" class="btn btn-primary" data-toggle="tooltip" title="Guardar Afiliado">Guardar Ciudad</button>
                            <button type="button" id="cerrar" class="btn btn-success btncerrar2" data-toggle="tooltip" title="Cancelar">Cancelar</button>
                        </div>
                    </div>

					<input type="hidden" id="nuevo" value="nuevo" name="accion"/>
			</fieldset>

		</form>
	</div>
</div>