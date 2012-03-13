<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Login extends CI_Controller {

 	/**
 	 * Constructor de la clase
 	 */
 	function __construct(){
 		parent::__construct();
 	}

 	/**
 	 * 
 	 */
 	public function index(){
 		$this->load->view('login_view');
 	}

 	/**
 	 * 
 	 */
 	public function validate($user=NULL, $pass=NULL){
 		$user = $this->input->post('user', TRUE);
 		$pass = $this->input->post('pass', TRUE);
 		$this->load->model('Login_Model');
 		$stat = $this->Login_Model->match_data($user, $pass);
 		
 		if( $stat == TRUE ){
 			redirect('/home/');
 		} else {
 			redirect('');
 		}
 	}

}