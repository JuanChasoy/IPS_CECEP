  
<?php
    require_once("../modeloAbstractoDB.php");
    class Usuarios extends ModeloAbstractoDB {
		private $id_usurio;
		private $nom_usuario;
        private $cedu_usuario;
        private $usua_user;
        private $celu_usuario;
        private $correo_usuario;
        private $id_sede;
        private $id_rol;
        private $usua_pass;
		private $usua_foto;
		
		function __construct() {
			//$this->db_name = '';
		}

		public function getId_medico(){
			return $this->id_usuario;
		}

		public function getNom_medico(){
			return $this->nom_usuario;
		}
		
		public function getCedu_medico(){
			return $this->cedu_usuario;
        }
        
        public function getCelu_medico(){
			return $this->usua_user;
        }
        
        public function getDire_medico(){
			return $this->celu_usuario;
        }
        
        public function getEmail_medico(){
			return $this->correo_usuario;
        }
        
        public function getId_sede(){
			return $this->id_sede;
        }
        
        public function getId_sede(){
			return $this->id_rol;
        }
        
        public function getId_sede(){
			return $this->usua_pass;
        }
        
        public function getId_sede(){
			return $this->usua_foto;
        }
        
        

		public function consultar($id_usuario='') {
			if($id_usuario !=''):
				$this->query = "
				SELECT id_usuario, nom_usuario, cedu_usuario,usua_user,celu_usuario, correo_usuario, id_sede,usua_pass,usua_foto
				FROM tb_usuarios
				WHERE id_usuario = '$id_usuario' order by id_usuario
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