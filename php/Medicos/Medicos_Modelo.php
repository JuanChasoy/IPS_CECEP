<?php
    require_once("../modeloAbstractoDB.php");
    class Medicos extends ModeloAbstractoDB {
		private $id_medico;
		private $nom_medico;
        private $cedu_medico;
        private $celu_medico;
        private $dire_medico;
        private $email_medico;
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
        
        public function getCelu_medico(){
			return $this->celu_medico;
        }
        
        public function getDire_medico(){
			return $this->dire_medico;
        }
        
        public function getEmail_medico(){
			return $this->email_medico;
        }
        
        public function getId_sede(){
			return $this->id_sede;
		}

		public function consultar($id_empleado='') {
			if($id_empleado !=''):
				$this->query = "
				SELECT id_empleado, nom_empleado, cedu_emplado, celu_empleado, dire_empleado, email_empleado, id_sede
				FROM tb_empleados
				WHERE id_empleado = '$id_empleado' order by id_empleado
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
			SELECT id_empleado, nom_empleado, celu_empleado, email_empleado, m.nom_sede 
			FROM tb_empleados as c inner join tb_sedes as m
			ON (c.id_sede = m.id_sede) order by id_empleado
			";
			
			$this->obtener_resultados_query();
			return $this->rows;
			
		}
		
		public function nuevo($datos=array()) {
			if(array_key_exists('id_empleado', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$nom_empleado= utf8_decode($nom_empleado);
				$this->query = "
					INSERT INTO tb_empleados
					(id_empleado, nom_empleado, cedu_emplado, celu_empleado, dire_empleado, email_empleado, id_sede)
					VALUES
					(NULL, '$nom_empleado', '$cedu_emplado', '$celu_empleado', '$dire_empleado', '$email_empleado', '$id_sede')
					";
				$resultado = $this->ejecutar_query_simple();
				return $resultado;
			endif;
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$nom_empleado= utf8_decode($nom_empleado);
			$this->query = "
			UPDATE tb_empleados
			SET nom_empleado='$nom_empleado',
			cedu_emplado='$cedu_emplado',
			celu_empleado='$celu_empleado',
			dire_empleado='$dire_emspleado',
			email_empleado='$email_empleado',
			id_sede='$id_sede'
			WHERE id_empleado = '$id_empleado'
			";
			$resultado = $this->ejecutar_query_simple();
			return $resultado;
		}
		
		public function borrar($id_empleado='') {
			$this->query = "
			DELETE FROM tb_empleados
			WHERE id_empleado = '$id_empleado'
			";
			$resultado = $this->ejecutar_query_simple();

			return $resultado;
		}
		
		function __destruct() {
			//unset($this);
		}
	}
?>