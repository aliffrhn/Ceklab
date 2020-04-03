<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Paket_Periksa_Controller extends CI_Controller{
    public function index(){
        $this->load->view('paket_periksa/paket_periksa_view');
    }
}