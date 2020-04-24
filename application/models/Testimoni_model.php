<?php
    class Testimoni_model extends CI_Model {
        
        public function get_testimoni(){
            $data = $this->db->get('testimoni');
            // var_dump($data->result_array());

            return $data->result_array();
        }

    }
?>