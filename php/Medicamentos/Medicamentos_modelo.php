<?php
    require_once("../modeloAbstractoDB.php");
    class Medicamento extends ModeloAbstractoDB {
		private $id_medicamento;
		private $nom_medicamento;
        
		
		function __construct() {
			//$this->db_name = '';
		}

		public function getId_medicamento(){
			return $this->id_medicamento;
		}

		public function getNom_medicamento(){
			return $this->nom_medicamento;
		}
		
	

		public function consultar($id_medicamento='') {
			if($id_medicamento !=''):
				$this->query = "
				SELECT id_medicamento, nom_medicamento
				FROM tb_medicamentos
				WHERE id_medicamento = '$id_medicamento' order by id_medicamento
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
			SELECT id_medicamento, nom_medicamento 
			FROM tb_medicamentos
			";
			
			$this->obtener_resultados_query();
			return $this->rows;
			
		}
		
		public function nuevo($datos=array()) {
			if(array_key_exists('id_medicamento', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$nom_medicamento= utf8_decode($nom_medicamento);
				$this->query = "
					INSERT INTO tb_medicamentos
					(id_medicamento, nom_medicamento)
					VALUES
					(NULL, '$nom_medicamento')
					";
				$resultado = $this->ejecutar_query_simple();
				return $resultado;
			endif;
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$nom_medicamento= utf8_decode($nom_medicamento);
			$this->query = "
			UPDATE tb_medicamentos
			SET nom_medicamento='$nom_medicamento'
			
			WHERE id_medicamento = '$id_medicamento'
			";
			$resultado = $this->ejecutar_query_simple();
			return $resultado;
		}
		
		public function borrar($id_medicamento='') {
			$this->query = "
			DELETE FROM tb_medicamentos
			WHERE id_medicamento = '$id_medicamento'
			";
			$resultado = $this->ejecutar_query_simple();

			return $resultado;
		}
		
		function __destruct() {
			//unset($this);
		}
	}
?>