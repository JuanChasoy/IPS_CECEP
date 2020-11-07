<?php
    require_once("../modeloAbstractoDB.php");
    class Servicios extends ModeloAbstractoDB {
        private $id_servicio;
        private $tipo_servicio;
        private $id_sede;
		
		function __construct() {
			
		}

		public function getId_Servicio(){
			return $this->id_servicio;
		}

		public function getTipo_servicio(){
			return $this->tipo_servicio;
		}
		
		public function getid_sede(){
			return $this->id_sede;
        }

		public function consultar($id_servicio='') {
			if($id_servicio !=''):
				$this->query = "
				SELECT id_servicio, tipo_servicio, id_sede
				FROM tb_servicio
				WHERE id_servicio = '$id_servicio' order by id_servicio
				";
				$this->obtener_resultados_query(); // se ejecuta cuando sea consulta select 
			endif;
			if(count($this->rows) == 1):
				foreach ($this->rows[0] as $propiedad=>$valor):
					$this->$propiedad = $valor;
				endforeach;
			endif;
		}
		
		public function lista() {
			$this->query = "
			SELECT id_servicio, tipo_servicio, sd.nom_sede 
			FROM tb_servicio AS sv INNER JOIN tb_sedes AS sd
			ON (sv.id_sede = sd.id_sede) ORDER BY id_servicio
			";
			
			$this->obtener_resultados_query();
			return $this->rows;
			
		}
		
		public function nuevo($datos=array()) {
			if(array_key_exists('id_servicio', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$tipo_servicio= utf8_decode($tipo_servicio);
				$this->query = "
					INSERT INTO tb_servicio
					(id_servicio, tipo_servicio, id_sede)
					VALUES
					(NULL,'$tipo_servicio', '$id_sede')
					";
				$resultado = $this->ejecutar_query_simple();
				return $resultado;
			endif;
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$tipo_servicio= utf8_decode($tipo_servicio);
			$this->query = "
			UPDATE tb_servicio
			SET tipo_servicio='$tipo_servicio',
			id_sede='$id_sede'
			WHERE id_servicio = '$id_servicio'
			";
			$resultado = $this->ejecutar_query_simple();
			return $resultado;
		}
		
		public function borrar($id_servicio='') {
			$this->query = "
			DELETE FROM tb_servicio
			WHERE id_servicio = '$id_servicio'
			";
			$resultado = $this->ejecutar_query_simple();

			return $resultado;
		}
		
		function __destruct() {
			
		}
	}
?>