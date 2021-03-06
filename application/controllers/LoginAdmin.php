<?php

class LoginAdmin extends CI_Controller {
    
    public function __construct()
    {
            parent::__construct();
            $this->load->library('session');
            $this->load->model('Profile_model');
            $this->load->model('Transaction_model');
    }

    public function index(){
        if($this->session->userdata('username')){
            $data = [];
            $data['transaction'] = $this->Transaction_model->get_transaction();

            $this->load->view('DashboardAdmin/DashboardAdmin', $data);
        }else {
            $this->load->view('LoginAdmin/LoginAdmin');
        }  
        
    }

    public function login(){
        // var_dump($this->input->post('username'));
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        $isLoginValid = $this->Profile_model->isLoginValid($username, $password);

        if($isLoginValid){
            // Set Session
            $this->session->set_userdata('username',$username);

            $this->load->view('loginadmin/loginadmin');
        }else {
            redirect('loginadmin/index', 'refresh');
        }
    }
}

?>