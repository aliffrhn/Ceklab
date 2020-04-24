<?php
    class Vendor_model extends CI_Model {
        
        public function getVendor(){
            $result = $this->db->get('vendor_lab');

            return $result->result_array();
        }
    }
?>