<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Paket_Periksa_Controller extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
    }
    
    public $title1 = array(
        "title" => "Paket Periksa",
        "subtitle" => "Mulai hidup sehat? Ikut CekLab"
    );
    public $title2 = array(
        "title" => "Screening COVID-19",
        "subtitle" => "Mulai hidup sehat? Ikut CekLab"
    );

    public function index(){
        $this->load->view('paket_periksa/home/bar/home_bar',$this->title1);
        $this->load->view('paket_periksa/home/index_home');
    }

    public function detail(){
        $this->load->view('paket_periksa/detail/bar/detail_bar', $this->title2);
        $this->load->view('paket_periksa/detail/index_detail');
    }
}