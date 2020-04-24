<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model{
    public function getAllCity(){
        $query = $this->db->get('kota');
        if($query->num_rows() > 0){
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function getCityById($id){
        $this->db->where('kota_id',$id);
        $query = $this->db->get('kota');
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return false;
        }
    }

    public function updateCity($id,$data){
        $this->db->where('kota.kota_id',$id);
        $query = $this->db->update('kota',$data);
        return $query;
    }

    public function deleteCity($id){
        $this->db->where('kota.kota_id',$id);
        $query = $this->db->delete('kota');
        return $query;
    }

    public function getAllProfile(){
        $query = $this->db->get('profile');
        if($query->num_rows() > 0){
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function getProfileByUsername($username){
        $this->db->where('username', $username);
        $query = $this->db->get('profile');
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return false;
        }
    }

    public function updateProfile($username,$data){
        $this->db->where('username', $username);
        $query = $this->db->update('profile', $data);
        return $query;
    }

    public function deleteProfile($username){
        $this->db->where('username', $username);
        $query = $this->db->delete('profile');
        return $query;
    }
}