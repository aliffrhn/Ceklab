<?php
    class Cekresiko_model extends CI_Model {

        public function get_resiko($cekresiko_id) {
            $this->db->where('cekresiko_id', $cekresiko_id);
            $query = $this->db->get('cek_resiko');
            $data = $query->result_array();
            // var_dump($data[0]['nama_penyakit']);

            return($query->result_array());
        }

        public function get_quest($cekresiko_id,$pertanyaan_id) {
            $this->db->select('pertanyaan');
            $this->db->from('cek_resiko_pertanyaan');
            $this->db->where('pertanyaan_id', $pertanyaan_id);
            $this->db->join('cek_resiko', 'cek_resiko.cekresiko_id = cek_resiko_pertanyaan.cekresiko_id');
            // $this->db->join('cek_resiko_jawaban', 'cek_resiko_jawaban.pertanyaan_id = cek_resiko_pertanyaan.pertanyaan_id');
            $data = $this->db->get('');
            // var_dump($data->result_array());

            return $data->result_array();
        }

        // public function insert_result() {
        //     $query = $this->db->insert('cek_resiko_jawaban',$data);
        //         if($query){
        //             return true;
        //         } else {
        //             return false;
        //         }
        // }

}