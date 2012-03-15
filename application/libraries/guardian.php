<?php

/**
 * Valida las credenciales de usuario e inicializa la sesion
 *
 * @author 	N. Alberto Mendoza
 * @author 	https://twitter.com/#!/_n3ri_
 * @todo 	sustituir por una libreria con mejores caracteristicas
 * @version 1.0
 */
class Guardian
{
	/**
	 * Constructor de la clase
	 */
	function __construct(){
		$this->CI =& get_instance();
	}

	/**
	 * Valida la credencial del usuario
	 *
	 * @param 	string 	usuario de sistema
	 * @param 	string 	clave de usuario
	 * @return 	bool 	TRUE si credenciales coinciden
	 */
	function login($usuario, $password){
		$this->CI->load->model('Login_Model');
 		$status = $this->CI->Login_Model->match_data($usuario, $password);
 		if ($status == true) {
 			$this->CI->session->sess_destroy();
 			$this->CI->session->sess_create();
 			$this->CI->session->set_userdata(array(
 					'logged_in' => true,
 					'usuario' 	=> $usuario
 				));
 		}
 		return $status;
	}

	/**
	 * Destruye la sesion del usuario
	 */
	function logout(){
		$this->CI->session->sess_destroy();
	}
}