<?php
 
require_once 'Empleados_Modelo.php';
$datos = $_GET;
switch ($_GET['accion']){
    case 'editar':
        $empleados = new Empleados();
        $resultado = $empleados->editar($datos);
        $respuesta = array(
                'respuesta' => $resultado
            );
        echo json_encode($respuesta);
        break;
    case 'nuevo':
        $empleados = new Empleados();
		$resultado = $empleados->nuevo($datos);
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
		$empleados = new Empleados();
		$resultado = $empleados->borrar($datos['codigo']);
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
        $empleados = new Empleados();
        $empleados->consultar($datos['codigo']);

        if($empleados->getId_empleado() == null) {
            $respuesta = array(
                'respuesta' => 'no existe'
            );
        }  else {
            $respuesta = array(
                'codigo' => $empleados->getId_empleado(),
                'empleado' => $empleados->getNom_empleado(),
                'cedula' =>$empleados->getCedu_emplado(),
                'celular' => $empleados->getCelu_empleado(),
                'direccion' => $empleados->getDire_empleado(),
                'email' =>$empleados->getEmail_empleado(),
                'sede' =>$empleados->getId_sede(),
                'respuesta' =>'existe'
            );
        }
        echo json_encode($respuesta);
        break;

    case 'listar':
        $empleados = new Empleados();
        $listado = $empleados->lista();
        echo json_encode(array('data'=>$listado), JSON_UNESCAPED_UNICODE);    
        break;
}
?>
