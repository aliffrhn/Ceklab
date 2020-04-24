<?php
    class Transaction_model extends CI_Model {

        public function get_transaction(){
            $this->db->select('*');
            $this->db->from('transaksi');
            $this->db->join('paket_periksa', 'paket_periksa.paket_periksa_id = transaksi.paket_periksa_id');
            $this->db->join('pasien', 'pasien.id_pasien = transaksi.id_pasien');
            $this->db->join('status', 'status.status_id = transaksi.status_id');
            $this->db->join('kota', 'kota.kota_id = paket_periksa.kota_id');
            $this->db->join('vendor_lab', 'vendor_lab.vendor_id = paket_periksa.vendor_id');
            
            $data = $this->db->get();
            // var_dump($data->result_array());
            return $data->result_array();
        }

        public function get_transactionByID($id){
            $this->db->select('*');
            $this->db->from('transaksi');
            $this->db->where('kode_transaksi', $id);
            $this->db->join('paket_periksa', 'paket_periksa.paket_periksa_id = transaksi.paket_periksa_id');
            $this->db->join('pasien', 'pasien.id_pasien = transaksi.id_pasien');
            $this->db->join('status', 'status.status_id = transaksi.status_id');
            
            $data = $this->db->get();
            // var_dump($data->result_array());
            return $data->result_array();
        }
        
        public function get_button(){
            $data = $this->db->get('status');
            // var_dump($data->result_array());

            return $data->result_array();
        }

        public function count_transaction(){
            $data = $this->db->get('transaksi');
            $result = count($data->result_array());
         
            // var_dump($data->result_array());
            return $result;
        }

        public function delete_transaction($id){
            $this->db->where('kode_transaksi', $id);
            $result = $this->db->delete('transaksi');

            return $result;
        }
    }
?>