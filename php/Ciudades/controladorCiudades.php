<?php
 
require_once 'Ciudades_Modelo.php';
$datos = $_GET;
switch ($_GET['accion']){
    case 'editar':
        $ciudades = new Ciudades();
        $resultado = $ciudades->editar($datos);
        $respuesta = array(
                'respuesta' => $resultado
            );
        echo json_encode($respuesta);
        break;
    case 'nuevo':
        $ciudades = new Ciudades();
		$resultado = $ciudades->nuevo($datos);
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
		$ciudades = new Ciudades();
		$resultado = $ciudades->borrar($datos['codigo']);
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
        $ciudades = new Ciudades();
        $ciudades->consultar($datos['codigo']);

        if($ciudades->getId_ciudad() == null) {
            $respuesta = array(
                'respuesta' => 'no existe'
            );
        }  else {
            $respuesta = array(
                'codigo' => $ciudades->getId_ciudad(),
                'ciudad' => $ciudades->getNom_ciudad(),
                'pais' =>$ciudades->getId_pais(),
                'respuesta' =>'existe'
            );
        }
        echo json_encode($respuesta);
        break;

    case 'listar':
        $ciudades = new Ciudades();
        $listado = $ciudades->lista();
        echo json_encode(array('data'=>$listado), JSON_UNESCAPED_UNICODE);    
        break;
}
?>
