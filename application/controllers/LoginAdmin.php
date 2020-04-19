<?php

class LoginAdmin extends CI_Controller {
    
    public function index(){
        $this->load->view('LoginAdmin/LoginAdmin');
    }

    public function login(){
        // var_dump($this->input->post('username'));
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
    }
}

?>