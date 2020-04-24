<?php

class Profile_model extends CI_Model {

    public function isLoginValid($username,$password){
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->where('role', 1);

        $result = $this->db->get('profile');

        if(empty($result->result())){
            return false;
        }else {
            return true;
        }
    }
}

?>