<?php
    class Status_model extends CI_Model {
        
        public function getStatus(){
            $result = $this->db->get('status');

            return $result->result_array();
        }
    }
?>