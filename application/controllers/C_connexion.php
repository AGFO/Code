<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_connexion extends CI_Controller {
	
	public function index(){
		echo'menu';
		$this->load->view('v_menu');
	}
	
}