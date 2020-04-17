<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ceklablogin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Profile_model');
	}	
	
	public function index()
	{
		$this->load->view('ceklab-loginpage');
	}

	public function login(){

		$data['username'] = $this->input->post('username');
		// $data['email'] = $this->input->post('email');
		$data['password'] = $this->input->post('password');

		if($this->Profile_model->login($data) == true){
			$this->session->set_userdata('username', $data['username']);
			var_dump($data);
		}else {
			$data['error_message'] = "Username/Email atau Password Salah";
			$this->load->view('ceklab-loginpage', $data);
		}
	}
}
?>