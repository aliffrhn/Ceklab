<?php
	class Transaction extends CI_Controller{

		function __construct(){
            parent::__construct();
            $this->load->model('Transaksi_model');
        }


		public function index(){
			$this->load->view('invoice');
		}
	}
?>