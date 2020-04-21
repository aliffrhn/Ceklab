<?php
	class Transaction extends CI_Controller{

		function __construct(){
            parent::__construct();
            $this->load->model('Transaksi_model');
            $this->load->library('session');
        }


		public function index(){
			$kode_transaksi = $this->session->userdata('kode_transaksi');
			$data['hasil'] = $this->Transaksi_model->getTransactions($kode_transaksi);
			
			$this->load->view('invoice', $data);
		}
	}
?>