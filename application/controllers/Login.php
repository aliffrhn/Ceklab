<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Profile_model');
	}	
	
	public function index()
	{
		if($this->session->userdata('username')) {
			$this->load->view('Dashboard/dashboard');
		}else {
			$this->load->view('Login/login');
		}
	}

	public function login(){

		$data['username'] = $this->input->post('username');
		// $data['email'] = $this->input->post('email');
		$data['password'] = $this->input->post('password');

		if($this->Profile_model->login($data) == true){
			$this->session->set_userdata('username', $data['username']);
			// var_dump($data);
			$this->load->view('Dashboard/dashboard');
		}else {
			$data['error_message'] = "Username atau Password Salah";
			$this->load->view('Login/login', $data);
		}
	}

	public function logout(){
		$this->session->unset_userdata('username');
		redirect('/Login/index');
	}
}
?>