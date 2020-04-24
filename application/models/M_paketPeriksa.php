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

    public function getPackage($id){
        $this->db->select("*");
        $this->db->from('paket_periksa');
        $this->db->where('paket_periksa_id', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getPemeriksaan($id){
        $this->db->select('pemeriksaan.pemeriksaan_id,pemeriksaan.nama_pemeriksaan');
        $this->db->from('paket_periksa');
        $this->db->join('pemeriksaan','paket_periksa.pemeriksaan_id = pemeriksaan.pemeriksaan_id');
        $this->db->where('paket_periksa.paket_periksa_id',$id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getVendor($id){
        $this->db->select('vendor_lab.vendor_id,vendor_lab.nama_vendor,alamat_vendor');
        $this->db->from('paket_periksa');
        $this->db->join('vendor_lab', 'paket_periksa.vendor_id = vendor_lab.vendor_id');
        $this->db->where('paket_periksa.paket_periksa_id', $id);
        $query = $this->db->get();
        return $query->result_array();
    }
}