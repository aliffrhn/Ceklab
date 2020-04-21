<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class PasienC extends CI_Controller{


			function __construct(){
				parent::__construct();
				$this->load->model('PasienM');
				$this->load->helper('url');
				$this->load->library('session');
				$this->load->helper('form');
			}
			
			public function index()
			{
				$this->load->view('pasien');
			}
			
			public function form_pasien(){
		        $gender = $this->input->post('gender', true);
		        $pasien = $this->input->post('pasien', true);
		        $umur = $this->input->post('umur', true);
		        $phone_number = $this->input->post('phone_number', true);
				$keterangan = $this->input->post('keterangan', true);

				$data = [
						'gender' => $this->input->post('gender', true),
				        'pasien' => $this->input->post('pasien', true),
				        'umur' => $this->input->post('umur', true),
				        'phone_number' => $this->input->post('phone_number', true),
						'keterangan' => $this->input->post('keterangan', true)
					];

				//var_dump($data);
				$insert = $this->PasienM->insert_new_pasien($data);
				if ($insert == true) {
					redirect('/Transaction/index');
				}else{
					redirect('/Pasien');
				}
	
				echo "Data Added!";
			}
	}
?>