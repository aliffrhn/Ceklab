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

        public function delete($id){
            // var_dump($id);
            $this->Transaction_model->delete_transaction($id);

            redirect('loginadmin/index', 'refresh');
        }

        public function edit($id){
            $this->Transaction_model->get_transactionByID($id);

            $this->load->view('EditTransactionAdmin/EditTransactionAdmin', $data);
        }
    }
?>