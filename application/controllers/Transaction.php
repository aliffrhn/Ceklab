<?php
    class Transaction extends CI_Controller {

        function __construct(){
            parent::__construct();
            $this->load->model('Transaction_model');
        }

        public function index(){
            $data = [];
            $data['transaction'] = $this->Transaction_model->get_transaction();
            $data['status'] = $this->Transaction_model->get_button();

            $this->load->view('Transactionpage/TransactionPage', $data);
        }
    }
?>