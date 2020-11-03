<?php
 
 require_once 'Citas_Modelo.php';

$datos = $_GET;

switch ($_GET['accion']){
    case 'editar':
        $citas = new Citas();
        $resultado = $citas->editar($datos);
        $respuesta = array(
                'respuesta' => $resultado
            );
        echo json_encode($respuesta);
        break;
    case 'nuevo':
        $citas = new Citas();
		$resultado = $citas->nuevo($datos);
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
		$citas = new Citas();
		$resultado = $citas->borrar($datos['codigo']);
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
        $citas = new Citas();
        $citas->consultar($datos['codigo']);

        if($citas->getId_empleado() == null) {
            $respuesta = array(
                'respuesta' => 'no existe'
            );
        }  else {
            $respuesta = array(
                'codigo' => $citas->getId_cita(),
                'nombre' => $citas->getNom_usu_cita(),
                'cedula' =>$citas->getCedu_usu_cita(),
                'correo' =>$citas->getCorreo_cita(),
                'servicio' => $citas->getId_servicio(),
                'respuesta' =>'existe'
                
            );
        }
        echo json_encode($respuesta);
        break;

    case 'listar':
        $citas = new Citas();
        $listado = $citas->lista();
        echo json_encode(array('data'=>$listado), JSON_UNESCAPED_UNICODE);    
        break;
}
?>
