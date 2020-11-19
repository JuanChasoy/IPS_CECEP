<?php
    require_once("../modeloAbstractoDB.php");
	
    class Usuario extends ModeloAbstractoDB {
        private $id_usuario;
        private $nom_usuario;
		private $cedu_usuario;
		private $usua_user;
        private $celu_usuario;
        private $correo_usuario;
		private $id_sede ;
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
		
		public function getNom_rol(){
			return $this->nom_rol;
        }
        
        public function getUsua_pass(){
			return $this->usua_pass;
		}

		public function getUsua_foto(){
			return $this->usua_foto;
		}


		
		public function consultar($datos = array()) {
			
			$usuario = $datos['usuario'];
			$password = $datos['password'];
            $this->query = "
            SELECT id_usuario, usua_user, usua_pass, nom_usuario, usua_foto, tb_roles.nom_rol
			FROM tb_usuarios 
			INNER JOIN tb_roles on (tb_usuarios.id_rol = tb_roles.id_rol)
			WHERE usua_user = '$usuario'
			";

            $this->obtener_resultados_query();
			
			if(count($this->rows) == 1):
				foreach ($this->rows[0] as $propiedad=>$valor):
					$this->$propiedad = $valor;
				endforeach;
			endif;
		}
		
		public function lista() {
			$this->query = "
			SELECT id_usuario, usua_user, nom_usuario, tb_roles.nom_rol
            FROM tb_usuarios 
            INNER JOIN tb_roles on (tb_usuarios.id_rol = tb_roles.id_rol)

			";
			
			$this->obtener_resultados_query();
			return $this->rows;
			
		}
        
        public function generarPassword($pass=""){
            $opciones = [
                'cost' => 12,
            ];
            
            $passwordHashed = password_hash($pass, PASSWORD_BCRYPT, $opciones);
            
            return $passwordHashed;
        }

		public function nuevo($datos=array()) {
			if(array_key_exists('usua_codi', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
                endforeach;
              
				$this->query = "
					INSERT INTO tb_usuario
					(usua_codi, usua_user, usua_nomb, usua_pass,perso_cod,update_at)
					VALUES
					(NULL, '$comu_nomb', '$muni_codi',NOW())
					";
					$resultado = $this->ejecutar_query_simple();
					return $resultado;
			endif;
			
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$this->query = "
			UPDATE tb_comuna
			SET comu_nomb ='$comu_nomb',
			muni_codi ='$muni_codi',
			update_at = NOW()
			WHERE comu_codi = '$comu_codi'
			";
			$resultado = $this->ejecutar_query_simple();
			return $resultado;
		}
		
		public function borrar($comu_codi='') {
			$this->query = "
			DELETE FROM tb_comuna
			WHERE comu_codi = '$comu_codi'
			";
			$resultado = $this->ejecutar_query_simple();

			return $resultado;
		}
		
		function __destruct() {
			//unset($this);
		}
	}
