<?php
    require_once("../modeloAbstractoDB.php");
    class Afiliados extends ModeloAbstractoDB {
		private $id_afiliado ;
		private $nom_afiliado;
        private $cedu_afiliado ;
        private $celu_afiliado ;
		private $tipo_afiliacion;
		private $id_sede ;
        
		
		function __construct() {
			//$this->db_name = '';
		}

		public function getId_afiliado(){
			return $this->id_afiliado;
		}

		public function getNom_afiliado(){
			return $this->nom_afiliado;
		}

		public function getCedu_afiliado(){
			return $this->cedu_afiliado;
        }
        
        public function getCelu_afiliado(){
			return $this->celu_afiliado;
		}

		public function getTipo_afiliacion(){
			return $this->tipo_afiliacion;
		}

		public function getId_sede(){
			return $this->id_sede;
		}
		
	

		public function consultar($id_afiliado='') {
			if($id_afiliado !=''):
				$this->query = "
				SELECT id_afiliado, nom_afiliado, cedu_afiliado, celu_afiliado, tipo_afiliacion, id_sede
				FROM tb_afiliados
				WHERE id_afiliado = '$id_afiliado' order by id_afiliado
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
			SELECT id_afiliado, nom_afiliado, cedu_afiliado, celu_afiliado, tipo_afiliacion, m.nom_sede 
			FROM tb_afiliados as c inner join tb_sedes as m
			ON (c.id_sede = m.id_sede) order by id_afiliado
			";
				
			$this->obtener_resultados_query();
			return $this->rows;
			
		}
		
		public function nuevo($datos=array()) {
			if(array_key_exists('id_afiliado', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$nom_afiliado= utf8_decode($nom_afiliado);
				$this->query = "
					INSERT INTO tb_afiliados
					(id_afiliado, nom_afiliado, cedu_afiliado, celu_afiliado, tipo_afiliacion, id_sede)
					VALUES
					(NULL, '$nom_afiliado', '$cedu_afiliado', '$celu_afiliado', '$tipo_afiliacion', '$id_sede')
					";
				$resultado = $this->ejecutar_query_simple();
				return $resultado;
			endif;
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$nom_afiliado= utf8_decode($nom_afiliado);
			$this->query = "
			UPDATE tb_afiliados
			SET nom_afiliado='$nom_afiliado',
            cedu_afiliado='$cedu_afiliado',
            celu_afiliado='$celu_afiliado',
            tipo_afiliacion='$tipo_afiliacion',
            id_sede='$id_sede'
			WHERE id_afiliado = '$id_afiliado'
			";
			$resultado = $this->ejecutar_query_simple();
			return $resultado;
		}
		
		public function borrar($id_afiliado='') {
			$this->query = "
			DELETE FROM tb_afiliados
			WHERE id_afiliado = '$id_afiliado'
			";
			$resultado = $this->ejecutar_query_simple();

			return $resultado;
		}
		
		function __destruct() {
			//unset($this);
		}
	}
?>