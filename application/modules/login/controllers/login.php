<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Controla el acceso a la aplicacion principal
 *
 * @author 	N. Alberto Mendoza
 * @author 	https://twitter.com/#!/_n3ri_
 * @todo 	encriptar clave
 * @version 0.1
 */
class Login extends CI_Controller {

 	/**
 	 * Constructor de la clase
 	 */
 	function __construct(){
 		parent::__construct();
 	}

 	/**
 	 * Muestra interfaz de acceso
 	 */
 	public function index(){
 		$this->load->view('login_view');
 	}

 	/**
 	 * Valida los datos de acceso ingresados por usuario y
 	 * redireccion segun resultado de evaluacion
 	 * 
 	 * @param 	string 	usuario de sistema
 	 * @param 	string 	clave de usuario
 	 */
 	public function validate($user=NULL, $pass=NULL){
 		$user = $this->input->post('user', TRUE);
 		$pass = $this->input->post('pass', TRUE);
 		
 		$status = $this->guardian->login($user, $pass);
 		if( $status == TRUE ){
 			redirect('home'); 			
 		} else {
 			redirect(''); 			
 		}
 	}

 	/**
 	 * Termina la sesion de usuario
 	 */
 	public function logout(){
 		$this->guardian->logout();
 		redirect(''); 		
 	}

}