<?php
    class Transaction extends CI_Controller {

        function __construct(){
            parent::__construct();
            $this->load->model('Transaction_model');
            $this->load->model('Kota_model');
            $this->load->model('Vendor_model');
            $this->load->model('Status_model');
        }

        public function index(){
            $data = [];
            $data['transaction'] = $this->Transaction_model->get_transaction();
            $data['status'] = $this->Transaction_model->get_button();

            $this->load->view('Transactionpage/TransactionPage', $data);
        }

        public function delete($id){
            // var_dump($id);
            $this->Transaction_model->delete_transaction($id);

            redirect('loginadmin/index', 'refresh');
        }

        public function edit($id){
            $data = [];
            $data['transaction'] = $this->Transaction_model->get_transactionByID($id);
            $data['kota'] = $this->Kota_model->getKota();
            $data['vendor'] = $this->Vendor_model->getVendor();
            $data['status'] = $this->Status_model->getStatus();

            $this->load->view('EditTransactionAdmin/EditTransactionAdmin', $data);
        }
    }
?>