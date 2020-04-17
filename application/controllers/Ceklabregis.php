<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ceklabregis extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Profile_model');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->helper('form');
	}
	
	public function index()
	{
		$this->load->view('Ceklab Register');
	}
	
	public function register(){
        $username = $this->input->post('username', true);
        $email = $this->input->post('email', true);
        $password = $this->input->post('password', true);
        $nama = $this->input->post('nama', true);
        $phone_number = $this->input->post('phone_number', true);
		$kota = $this->input->post('kota', true);
		
		if(sizeof($this->Profile_model->get_profile($username)) == 0){
			$data = [
						'username' => $this->input->post('username', true),
						'email' => $this->input->post('email', true),
						'password' => $this->input->post('password', true),
						'nama' => $this->input->post('nama', true),
						'phone_number' => $this->input->post('phone_number', true),
						'kota' => $this->input->post('kota', true)
					];
				$insert = $this->Profile_model->insert_new_profile($data);
				$this->session->set_userdata($username);
				redirect('/ceklablogin');
				echo "data added!";
		} else {
			$data['error_message'] = "Username telah digunakan";
			$this->load->view('Ceklab Register', $data);
		}
	}
}
?>