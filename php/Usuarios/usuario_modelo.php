  
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

		public function getId_usuario(){
			return $this->id_usuario;
		}

		public function getNom_usuario(){
			return $this->nom_usuario;
		}
		
		public function getCedu_usuario(){
			return $this->cedu_usuario;
        }
        
        public function getUsua_user(){
			return $this->usua_user;
        }
        
        public function getCelu_usuario(){
			return $this->celu_usuario;
        }
        
        public function getCorreo_usuario(){
			return $this->correo_usuario;
        }
        
        public function getId_sede(){
			return $this->id_sede;
        }
        
        public function getId_rol(){
			return $this->id_rol;
        }
        
        public function getUsua_pass(){
			return $this->usua_pass;
        }
        
        public function getUsua_foto(){
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
			SELECT id_usuario, nom_usuario, cedu_usuario,usua_user,celu_usuario, correo_usuario, id_sede,usua_pass,usua_foto
			FROM tb_usuarios as c inner join tb_sedes as m
			ON (c.id_sede = m.id_sede) order by id_medico
			";
			
			$this->obtener_resultados_query();
			return $this->rows;
			
		}
		
		public function nuevo($datos=array()) {
			if(array_key_exists('id_usuario', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$nom_usuario= utf8_decode($nom_medico);
				$this->query = "
					INSERT INTO tb_usuario
					(id_usuario, nom_usuario, cedu_emplado, celu_usuario dire_usuario email_usuario id_sede)
					VALUES
					(NULL, '$nom_usuario, '$cedu_emplado', '$celu_usuario, '$dire_usuario, '$email_usuario, '$id_sede')
					";
				$resultado = $this->ejecutar_query_simple();
				return $resultado;
			endif;
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$nom_usuario utf8_decode($nom_usuario);
			$this->query = "
			UPDATE tb_usuarios
		SET id_usuario'$id_usurio';
		nom_usuario'$nom_usuario';
        cedu_usuario '$cedu_usuario';
        usua_user '$usua_user';
        celu_usuario '$celu_usuario';
        correo_usuario '$correo_usuario';
        id_sede '$id_sede';
        id_rol '$id_rol';
        usua_pass '$usua_pass';
		usua_foto '$usua_foto';

			";
			$resultado = $this->ejecutar_query_simple();
			return $resultado;
		}
		
		public function borrar($id_usuario'') {
			$this->query = "
			DELETE FROM tb_usuario
			WHERE id_usuario= '$id_usuario
			";
			$resultado = $this->ejecutar_query_simple();

			return $resultado;
		}
		
		function __destruct() {
			//unset($this);
		}
	}
?>