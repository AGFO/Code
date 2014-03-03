<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_connexion extends CI_Controller {
    
public function _construct ()
{
parent::__construct();


       }

public function indexdd () {
    $this->load->view('v_identification');
}
	
public function index (){
	$this->load->view('v_menu');
                
	}
public function rapportVisite (){
    
    $this->load->view('v_rapport');
    
}
public function consultation (){
    $this->load->view('v_consultation');
}
public function deconnexion (){
    $this->load->view('v_deconnexion');
}
}
	
