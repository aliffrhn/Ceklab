<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Paket_Periksa_Controller extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
    }
    
    public $data = array(
        "title" => "Paket Periksa",
        "subtitle" => "Mulai hidup sehat? Ikut CekLab"
    );

    public function index(){
        $this->load->view('paket_periksa/home/bar/home_bar',$this->data);
        $this->load->view('paket_periksa/home/index_home');
    }

    public function detail(){
        
    }
}