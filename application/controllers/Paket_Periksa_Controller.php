<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Paket_Periksa_Controller extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_paketPeriksa');
    }
    
    public $title1 = array(
        "title" => "Paket Periksa",
        "subtitle" => "Mulai hidup sehat? Ikut CekLab"
    );

    public function index(){
        $data['city'] = $this->M_paketPeriksa->getCity();
        $data['packages'] = $this->M_paketPeriksa->getListPackageIndex(1);
        $this->load->view('paket_periksa/home/bar/home_bar',$this->title1);
        $this->load->view('paket_periksa/home/index_home',$data);
    }

    public function getListPackageById(){
        $id = $_POST['id'];
        $data = $this->M_paketPeriksa->getListPackageIndex($id);
        echo json_encode($data);
    }

    public function detail(){
        $id = $_GET['id'];
        $data['subtitle'] = "Mulai hidup sehat? Ikut CekLab";
        $data['package'] = $this->M_paketPeriksa->getPackage($id);
        $data['pemeriksaan'] = $this->M_paketPeriksa->getPemeriksaan($id);
        $data['vendor'] = $this->M_paketPeriksa->getVendor($id);
        $this->load->view('paket_periksa/detail/bar/detail_bar', $data);
        $this->load->view('paket_periksa/detail/index_detail',$data);
    }
}