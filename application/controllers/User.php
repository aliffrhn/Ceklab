<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class User extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('M_user');
        }
        public function index(){
            $data['data']=$this->M_user->getData();
            $this->load->view('Landingpage',$data);
        }

        public function insert(){
            $array=array(
                'nama' => $this->input->post('nama'),
                'umur' => $this->input->post('umur'),
                'gender' => $this->input->post('optradio'),
                'alamat' => $this->input->post('alamat'),
                'no_wa' => $this->input->post('telp')
            );
            $this->M_user->insertPeserta($array);
            redirect('User/index');
        }
    }
?>