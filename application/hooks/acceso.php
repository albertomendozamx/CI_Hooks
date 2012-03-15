<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Redirecciona a los modulos de sistema segun el estado de la validacion
 * 
 * @see 	http://goo.gl/a8q9p
 */
class Acceso{

	public function valida(){
		$this->CI =&get_instance();
		$secciones_privadas = array('home');

		// Si se dirije a login despues de autenticarse, redireccionamos a home
		if($this->CI->session->userdata('logged_in')==true && $this->CI->router->method == 'login') 
			redirect('home');
		
		// Si se dirije a una seccion dentro de sistema sin autenticarse, redireccionamos a login
		if($this->CI->session->userdata('logged_in')!=true && $this->CI->router->method != 'login' && in_array($this->CI->router->class, $secciones_privadas)) 
			redirect('');
	}
}

