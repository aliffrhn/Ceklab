<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Pasien extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->model('PasienHSM');
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->helper('form');
		}
		
		public function index(){
			$paket_periksa_id = $this->input->post('paket_periksa_id');
			$data = [];
			$data['paket_periksa_id'] = $paket_periksa_id;

			$this->load->view('Pasien/pasien', $data);
		}
		
		public function form_pasien(){
			$gender = $this->input->post('gender', true);
			$pasien = $this->input->post('pasien', true);
			$umur = $this->input->post('umur', true);
			$phone_number = $this->input->post('phone_number', true);
			$alamat = $this->input->post('alamat', true);
			$tanggal = $this->input->post('tanggal', true);
			$waktu = $this->input->post('waktu', true);
			$keterangan = $this->input->post('keterangan', true);
			$paket_periksa_id = $this->input->post('periksaId', true);

			$data = [
					'gender' => $this->input->post('gender', true),
					'pasien' => $this->input->post('pasien', true),
					'umur' => $this->input->post('umur', true),
					'phone_number' => $this->input->post('phone_number', true),
					'alamat' => $this->input->post('alamat', true),
					'tanggal' => $this->input->post('tanggal', true),
					'waktu' => $this->input->post('waktu', true),
					'keterangan' => $this->input->post('keterangan', true)
				];

			$pasien_id = $this->PasienHSM->insert_new_pasien($data);
			var_dump($pasien_id);
			redirect('/Transaction/insertTransaction/'.$pasien_id .'/'.$paket_periksa_id);
			echo "Data Added!";
		}

	}
?>