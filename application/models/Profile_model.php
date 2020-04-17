<?php
class Profile_model extends CI_Model{

	protected $_table = 'profile';

	public function check_username($username){
		return (sizeof($this->db->get_where($this->_table, ['username', $username])->result_array()[0]) > 0);
	}
	
	public function login($data) {
		$this->db->like('username',$data['username']);
		// $this->db->or_like('email', $data['email']);
		$this->db->like('password',$data['password']);    
		$query = $this->db->get($this->_table);
		if($query->num_rows() > 0){
			return true;
		} else {
			return false;
		}
	}

	public function insert_new_profile($data){
		$query = $this->db->insert('profile',$data);
		if($query){
			return true;
		} else {
			return false;
		}
	}

	public function get_profile($username){
		$this->db->where('username', $username);
		$data = $this->db->get($this->_table)->result_array();
		return $data;
	}
}
?>