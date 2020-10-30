<?php
 
require_once 'Medicos_Modelo.php';  // Requiere el modelo Medicos
$datos = $_GET;
switch ($_GET['accion']){
    case 'editar':
        $medicos = new Medicos();
        $resultado = $medicos->editar($datos);
        $respuesta = array(
                'respuesta' => $resultado
            );
        echo json_encode($respuesta);
        break;
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
                'codigo' => $empleados->getId_medico(),
                'empleado' => $empleados->getNom_medico(),
                'cedula' =>$empleados->getCedu_medico(),
                'celular' => $empleados->getCelu_medico(),
                'correo' =>$empleados->getCorreo_empleado(),
                'sede' =>$empleados->getId_sede(),
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