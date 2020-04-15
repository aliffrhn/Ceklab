<?php
    class Transaction_model extends CI_Model {

        public function get_transaction(){
            $data = $this->db->get('transaksi');

            return $data->result_array();
        }
        
        public function count_transaction(){
            $data = $this->db->get('transaksi');
            $result = count($data->result_array());
            // var_dump($data->result_array());
            return $result;
        }
    }
?>