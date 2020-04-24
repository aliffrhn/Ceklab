<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Pendaftaran_model extends CI_Model{
        
        public function getData(){
            $this->db->select('*');
            $this->db->from('pendaftaran');
            $this->db->join('kota','pendaftaran.kota_id=kota.kota_id');

            return $this->db->get()->result_array();
        }

        public function insertPeserta($data){
            $this->db->insert('peserta',$data);
        }
    }
?>