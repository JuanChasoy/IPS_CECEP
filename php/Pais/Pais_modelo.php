<?php
    require_once("../modeloAbstractoDB.php");
    class Pais extends ModeloAbstractoDB {
		private $id_pais;
		private $nom_pais;
        
		
		function __construct() {
			//$this->db_name = '';
		}

		public function getId_pais(){
			return $this->id_pais;
		}

		public function getNom_pais(){
			return $this->nom_pais;
		}
		
	

		public function consultar($id_pais='') {
			if($id_pais !=''):
				$this->query = "
				SELECT id_pais, nom_pais
				FROM tb_pais
				WHERE id_pais = '$id_pais' order by id_pais
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
			SELECT id_pais, nom_pais 
			FROM tb_pais
			";
			
			$this->obtener_resultados_query();
			return $this->rows;
			
		}
		
		public function nuevo($datos=array()) {
			if(array_key_exists('id_pais', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$nom_pais= utf8_decode($nom_pais);
				$this->query = "
					INSERT INTO tb_pais
					(id_pais, nom_pais)
					VALUES
					(NULL, '$nom_pais')
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
			UPDATE tb_pais
			SET nom_pais='$nom_pais'
			
			WHERE id_pais = '$id_pais'
			";
			$resultado = $this->ejecutar_query_simple();
			return $resultado;
		}
		
		public function borrar($id_pais='') {
			$this->query = "
			DELETE FROM tb_pais
			WHERE id_pais = '$id_pais'
			";
			$resultado = $this->ejecutar_query_simple();

			return $resultado;
		}
		
		function __destruct() {
			//unset($this);
		}
	}
?>