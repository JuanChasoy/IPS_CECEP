<?php
 
 require_once 'Servicios_Modelo.php';

$datos = $_GET;

switch ($_GET['accion']){
    case 'editar':
        $servicios = new Servicios();
        $resultado = $servicios->editar($datos);
        $respuesta = array(
                'respuesta' => $resultado
            );
        echo json_encode($respuesta);
        break;
    case 'nuevo':
        $servicios = new Servicios();
		$resultado = $servicios->nuevo($datos);
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
		$servicios = new Servicios();
		$resultado = $servicios->borrar($datos['codigo']);
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
        $servicios = new Servicios();
        $servicios->consultar($datos['codigo']);

        if($servicios->getId_empleado() == null) {
            $respuesta = array(
                'respuesta' => 'no existe'
            );
        }  else {
            $respuesta = array(
                'codigo' => $servicios->getId_cita(),
                'nombre' => $servicios->getNom_usu_cita(),
                'cedula' =>$servicios->getCedu_usu_cita(),
                'correo' =>$servicios->getCorreo_cita(),
                'servicio' => $servicios->getId_servicio(),
                'respuesta' =>'existe'
                
            );
        }
        echo json_encode($respuesta);
        break;

    case 'listar':
        $servicios = new Servicios();
        $listado = $servicios->lista();
        echo json_encode(array('data'=>$listado), JSON_UNESCAPED_UNICODE);    
        break;
}
?>
