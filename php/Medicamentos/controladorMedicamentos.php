<?php
 
require_once 'Medicamentos_modelo.php';
$datos = $_GET;
switch ($_GET['accion']){
    case 'editar':
        $medicamento = new Medicamento();
        $resultado = $medicamento->editar($datos);
        $respuesta = array(
                'respuesta' => $resultado
            );
        echo json_encode($respuesta);
        break;
    case 'nuevo':
        $medicamento = new Medicamento();
		$resultado = $medicamento->nuevo($datos);
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
		$medicamento = new Medicamento();
		$resultado = $medicamento->borrar($datos['codigo']);
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
        $medicamento = new Medicamento();
        $medicamento->consultar($datos['codigo']);

        if($medicamento->getId_medicamento() == null) {
            $respuesta = array(
                'respuesta' => 'no existe'
            );
        }  else {
            $respuesta = array(
                'codigo' => $medicamento->getId_medicamento(),
                'medicamento' => $medicamento->getNom_medicamento(),
                'respuesta' =>'existe'
            );
        }
        echo json_encode($respuesta);
        break;

    case 'listar':
        $medicamento = new Medicamento();
        $listado = $medicamento->lista();
        echo json_encode(array('data'=>$listado), JSON_UNESCAPED_UNICODE);    
        break;
}
?>
