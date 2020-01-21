<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		
		$this->load->view('welcome_message'); //Welcome controllerını çağırdığımda welcome_message aslı view'ı yükle
	}
	// http://localhost/codeigniter/controllerAdı/methodAdı/parametrex1353...
	public function getMessage(){
		echo "burası yeni method";
	}
	public function getParams($param1, $param2){
		echo $param1;
		echo $param2;
	}
}

