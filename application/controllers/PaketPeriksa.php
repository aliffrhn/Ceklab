<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PaketPeriksa extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PaketPeriksa_model');
    }
    
    public $title1 = array(
        "title" => "Paket Periksa",
        "subtitle" => "Mulai hidup sehat? Ikut CekLab"
    );

    public function index(){
        $data['city'] = $this->PaketPeriksa_model->getCity();
        $data['packages'] = $this->PaketPeriksa_model->getListPackageIndex(1);
        $this->load->view('PaketPeriksa/paketperiksabar',$this->title1);
        $this->load->view('PaketPeriksa/paketperiksa',$data);
    }

    public function getListPackageById(){
        $id = $_POST['id'];
        $data = $this->PaketPeriksa_model->getListPackageIndex($id);
        echo json_encode($data);
    }

    public function detail(){
        $id = $_GET['id'];
        $data['subtitle'] = "Mulai hidup sehat? Ikut CekLab";
        $data['package'] = $this->PaketPeriksa_model->getPackage($id);
        $data['pemeriksaan'] = $this->PaketPeriksa_model->getPemeriksaan($id);
        $data['vendor'] = $this->PaketPeriksa_model->getVendor($id);
        $this->load->view('PaketPeriksaDetail/paketperiksadetailbar', $data);
        $this->load->view('PaketPeriksaDetail/paketperiksadetail',$data);
    }
}