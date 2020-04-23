<?php
	class Transaction extends CI_Controller{

		function __construct(){
            parent::__construct();
            $this->load->model('Transaksi_model');
            $this->load->library('session');
            $this->load->helper(array('form', 'url'));
        }


		public function index($pasien_id, $paket_periksa_id){
			$insert_transaction = $this->Transaksi_model->insertTransaction($pasien_id, $paket_periksa_id);
			$data['hasil'] = $this->Transaksi_model->getTransactions($insert_transaction);

			$this->load->view('invoice', $data);
		}


		public function uploadImg(){
			$data['hasil'] = $this->Transaksi_model->do_upload();

			if($this->input->post('submit')){
				 $this->db->insert('transaksi', $data);
			}

			$this->load->view('invoice', $data);
		}

		

	}
?>