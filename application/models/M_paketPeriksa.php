<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_paketPeriksa extends CI_Model{
    public function getCity(){
        $this->db->select('*');
        $this->db->from('kota');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getListPackageIndex($id){
        $this->db->select("paket_periksa_id,judul,photo_url");
        $this->db->from('paket_periksa');
        $this->db->join('kota', 'paket_periksa.kota_id = kota.kota_id');
        $this->db->where('paket_periksa.kota_id',$id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getListPackageId()
    {
        $id = $_POST['id'];
        $this->db->select("paket_periksa_id,judul,photo_url");
        $this->db->from('paket_periksa');
        $this->db->join('kota', 'paket_periksa.kota_id = kota.kota_id');
        $this->db->where('paket_periksa.kota_id', $id);
        $query = $this->db->get();
        return $query->result_array();
    }
}