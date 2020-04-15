<?php
    class Landingpage extends CI_Controller {

        function __construct(){
            parent::__construct();
            $this->load->model('Transaction_model');
        }

        public function index(){
            $data = [];
            $data['count_transaction'] = $this->Transaction_model->count_transaction();
            // var_dump($data);
            $this->load->view('LandingPage/LandingPage', $data);
        }
    }
?>