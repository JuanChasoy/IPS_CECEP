<?php
    require_once("../modeloAbstractoDB.php");
    class Medicos extends ModeloAbstractoDB {
		private $id_medico;
		private $nom_medico;
        private $cedu_medico;
        private $celu_medico;
        private $Especialista;
        private $correo_medico;
		private $id_sede;
		
		function __construct() {
			//$this->db_name = '';
		}

		public function getId_medico(){
			return $this->id_medico;
		}

		public function getNom_medico(){
			return $this->nom_medico;
		}
		
		public function getCedu_medico(){
			return $this->cedu_medico;
        }

        public function getEspecialista(){
			return $this->Especialista;
		}
        
        public function getCelu_medico(){
			return $this->celu_medico;
        }
        
        public function getCorreo_medico(){
			return $this->correo_medico;
        }
        
        public function getId_sede(){
			return $this->id_sede;
		}

		public function consultar($id_medico='') {
			if($id_medico !=''):
				$this->query = "
				SELECT id_medico, nom_medico, celu_medico, Especialista, cedu_medico, correo_medico, id_sede
				FROM tb_medicos
				WHERE id_empleado = '$id_medico' order by id_medico
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
			SELECT id_medico, nom_medico, celu_medico, Especialista, correo_medico, m.nom_sede 
			FROM tb_medicos as c inner join tb_sedes as m
			ON (c.id_sede = m.id_sede) order by id_medico
			";
			
			$this->obtener_resultados_query();
			return $this->rows;
			
		}
		
		public function nuevo($datos=array()) {
			if(array_key_exists('id_medico', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$nom_medico= utf8_decode($nom_medico);
				$this->query = "
					INSERT INTO tb_medicos
					(id_medico, nom_medico, celu_medico, Especialista, cedu_medico,  correo_medico, id_sede)
					VALUES
					(NULL, '$nom_medico', '$cedu_medico', '$Especialista', '$celu_medico', '$correo_medico', '$id_sede')
					";
				$resultado = $this->ejecutar_query_simple();
				return $resultado;
			endif;
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$nom_medico= utf8_decode($nom_medico);
			$this->query = "
			UPDATE tb_medicos
			SET nom_medico='$nom_medico',
			celu_medico='$celu_medico',
            especialista='$Especialista',
            cedu_medico='$cedu_medico',
			correo_medico='$correo_empleado',
			id_sede='$id_sede'
			WHERE id_medico = '$id_medico'
			";
			$resultado = $this->ejecutar_query_simple();
			return $resultado;
		}
		
		public function borrar($id_medico='') {
			$this->query = "
			DELETE FROM tb_medicos
			WHERE id_medico = '$id_medico'
			";
			$resultado = $this->ejecutar_query_simple();

			return $resultado;
		}
		
		function __destruct() {
			//unset($this);
		}
	}
?>