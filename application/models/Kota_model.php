<?php
    class Kota_model extends CI_Model {
        
        public function getKota(){
            $result = $this->db->get('kota');

            return $result->result_array();
        }
    }
?>