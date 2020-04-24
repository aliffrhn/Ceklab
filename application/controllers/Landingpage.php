<?php
    class Landingpage extends CI_Controller {

        function __construct(){
            parent::__construct();
            $this->load->model('Transaction_model');
            $this->load->model('Testimoni_model');
        }

        public function index(){
            $data = [];
            $data['count_transaction'] = $this->Transaction_model->count_transaction();
            $data['testimoni'] = $this->Testimoni_model->get_testimoni();

            // var_dump($data);
            $this->load->view('LandingPage/LandingPage', $data);
        }
    }
?>