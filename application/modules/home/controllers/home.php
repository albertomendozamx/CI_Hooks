<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Seccion principal de sistema
 * @author 	N. Alberto Mendoza
 * @author 	https://twitter.com/#!/_n3ri_
 */
class Home extends CI_Controller {

	/**
	 * Constructor
	 */
	function __construct(){
		parent::__construct();
	}

	/**
	 * Muestra seccion principal
	 */
	public function index(){
		$this->load->view('home_view');
	}

}