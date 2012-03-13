<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 */
class Login_Model extends CI_Model {

  /**
   * 
   */
  function __construct(){
  	parent::__construct();
  }

  /**
   * 
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