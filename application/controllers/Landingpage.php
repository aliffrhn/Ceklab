<?php
    class Landingpage extends CI_Controller {

        function __construct(){
            parent::__construct();
            $this->load->model('Pendaftaran_model');
            $this->load->model('Transaction_model');
            $this->load->model('Testimoni_model');
        }

        public function index(){
            $data = [];
            $data['pendaftaran'] = $this->Pendaftaran_model->getData();
            $data['count_transaction'] = $this->Transaction_model->count_transaction();
            $data['testimoni'] = $this->Testimoni_model->get_testimoni();

            // var_dump($data['data']);
            $this->load->view('LandingPage/LandingPage', $data);
        }

        public function insert(){
            $array = array(
                'nama' => $this->input->post('nama'),
                'umur' => $this->input->post('umur'),
                'gender' => $this->input->post('optradio'),
                'alamat' => $this->input->post('alamat'),
                'no_wa' => $this->input->post('telp')
            );
            $this->Pendaftaran_model->insertPeserta($array);

            redirect('Landingpage/index');
        }
    }
?>