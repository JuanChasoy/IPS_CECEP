<?php
 
require_once 'Medicos_Modelo.php';  // Requiere el modelo Medicos
$datos = $_GET;
switch ($_GET['accion']){
    
    case 'nuevo':
        $medicos = new Medicos();
		$resultado = $medicos->nuevo($datos);
        if($resultado > 0) {
            $respuesta = array(
                'respuesta' => 'correcto'
            );
        }  else {
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
        echo json_encode($respuesta);
        break;
    case 'borrar':
		$medicos = new Medicos();
		$resultado = $medicos->borrar($datos['codigo']);
        if($resultado > 0) {
            $respuesta = array(
                'respuesta' => 'correcto'
            );
        }  else {
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
        echo json_encode($respuesta);
        break;

    case 'consultar':
        $medicos = new Medicos();
        $medicos->consultar($datos['codigo']);

        if($medicos->getId_medico() == null) {
            $respuesta = array(
                'respuesta' => 'no existe'
            );
        }  else {
            $respuesta = array(     // Aqui van los Get de medicos
                'codigo' => $medicos->getId_medico(),
                'empleado' => $medicos->getNom_medico(),
                'Especialista' =>$medicos->getEspecialista(),
                'celular' => $medicos->getCelu_medico(),
                'cedula' =>$medicos->getCedu_medico(),
                'correo' =>$medicos->getCorreo_medico(),
                'sede' =>$medicos->getId_sede(),
                'respuesta' =>'existe'
            );
        }
        echo json_encode($respuesta);
        break;

    case 'listar':
        $medicos = new Medicos();
        $listado = $medicos->lista();
        echo json_encode(array('data'=>$listado), JSON_UNESCAPED_UNICODE);    
        break;
}
?>