<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Ceklabresikodiabetes extends CI_Controller {
        
        function __construct(){
            parent::__construct();
            $this->load->model('Cekresiko_model');
        }

        public function index() {

            $this->load->view('Cek Resiko Diabetes');
            
        }

    }   