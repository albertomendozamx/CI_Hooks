<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Valida credenciales de sistema
 * @author 	N. Alberto Mendoza
 * @author 	https://twitter.com/#!/_n3ri_
 */
class Login_Model extends CI_Model {

  /**
   * Constructor de la clase
   */
  function __construct(){
  	parent::__construct();
  }

  /**
   * Comprueba la existencia de los datos ingresados por el usuario
   * @param 	string 	usuario de sistema
   * @param 	string 	clave de usuario
   * @return 	bool 	TRUE si los datos coinciden
   */
  function match_data($user, $pass){
  	
  	$this->db->where('username',$user);
  	$this->db->where('password',$pass);
  	$user_data = $this->db->get('login');
  	
  	if ( $user_data->num_rows() > 0 ){
  		return true;
  	} else {
  		return false;
  	}

  }


 }