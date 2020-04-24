<?php
    class Invoice extends CI_Controller{

        function __construct(){
            parent::__construct();
            if(!$this->session->userdata('username')){
                redirect('Login/index');
            }
            $this->load->model('Transaction_model');
         }

        public function index($id_transaction){
            $data['hasil'] = $this->Transaction_model->getTransactions($id_transaction);

            $this->load->view('Invoice/invoice', $data);
        }
    }
?>