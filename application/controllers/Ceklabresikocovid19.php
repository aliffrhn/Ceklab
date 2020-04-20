<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Ceklabresikocovid19 extends CI_Controller {
        
        function __construct(){
            parent::__construct();
            $this->load->model('Cekresiko_model');
        }

        public function index() {
            $data = [];
            $data['nmPenyakit'] = $this->Cekresiko_model->get_resiko('1');
            $data['desPenyakit'] = $this->Cekresiko_model->get_resiko('1');
            $data['quest'] = $this->Cekresiko_model->get_quest('2','1');
            $this->load->view('Cek Resiko COVID19', $data);
            
        }
        
    }   