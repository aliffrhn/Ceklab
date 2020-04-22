<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminController extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
        $this->load->library('session');
    }

    public function city_admin(){
        $data = [];
        $res = $this->M_admin->getAllCity();
        if ($res != false) {
            $data['cities'] = $res;
            $this->load->view('admin/crud_kota_view',$data);
        } else {
            $data['cities'] = array();
            $this->load->view('admin/crud_kota_view', $data);
        }
    }

    public function editCity($id){
        $res = $this->M_admin->getCityById($id);
        if($res != false){
            $data['city'] = $res;
            $this->load->view('admin/crud_kota_form',$data);
        } else {
            $this->session->set_flashdata('failed', 'diload');
            redirect('AdminController/city_admin','refresh');
        }
    }

    public function updateCity(){
        $id = $this->input->post('id');
        $name = $this->input->post('city_name');
        $data = array(
            'nama_kota' => $name,
        );
        $res = $this->M_admin->updateCity($id,$data);
        if($res){
            $this->session->set_flashdata('success', 'diupdate');
            redirect('AdminController/city_admin', 'refresh');
        } else {
            $this->session->set_flashdata('failed', 'diupdate');
            redirect('AdminController/city_admin', 'refresh');
        }
    }

    public function deleteCity($id){
        $res = $this->M_admin->deleteCity($id);
        if($res){
            $this->session->set_flashdata('success', 'dihapus');
            redirect('AdminController/city_admin', 'refresh');
        } else {
            $this->session->set_flashdata('failed', 'dihapus');
            redirect('AdminController/city_admin', 'refresh');
        }
    }

    public function profile_admin(){
        $data = [];
        $res = $this->M_admin->getAllProfile();
        if ($res != false) {
            $data['profiles'] = $res;
            $this->load->view('admin/crud_profile_view', $data);
        } else {
            $data['profiles'] = array();
            $this->load->view('admin/crud_profile_view', $data);
        }
    }

    public function editProfile($username)
    {
        $res = $this->M_admin->getProfileByUsername($username);
        if ($res != false) {
            $data['profile'] = $res;
            $this->load->view('admin/crud_profile_form', $data);
        } else {
            $this->session->set_flashdata('failed', 'diload');
            redirect('AdminController/profile_admin', 'refresh');
        }
    }

    public function updateProfile()
    {
        $username = $this->input->post('username');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $kota = $this->input->post('kota');
        $pass = $this->input->post('password');
        $data = array(
            'nama' => $name,
            'email' => $email,
            'phone_number' => $phone,
            'kota' => $kota,
            'password' => $pass
        );
        $res = $this->M_admin->updateProfile($username,$data);
        if ($res) {
            $this->session->set_flashdata('success', 'diupdate');
            redirect('AdminController/profile_admin', 'refresh');
        } else {
            $this->session->set_flashdata('failed', 'diupdate');
            redirect('AdminController/profile_admin', 'refresh');
        }
    }

    public function deleteProfile($username)
    {
        $res = $this->M_admin->deleteCity($username);
        if ($res) {
            $this->session->set_flashdata('success', 'dihapus');
            redirect('AdminController/profile_admin', 'refresh');
        } else {
            $this->session->set_flashdata('failed', 'dihapus');
            redirect('AdminController/profile_admin', 'refresh');
        }
    }
}