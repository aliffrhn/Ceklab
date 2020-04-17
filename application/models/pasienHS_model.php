<?php
	class pasienHS_model extends CI_Model{

		public function getAllMahasiswa()
		{
			//use query builder to get data table "mahasiswa"
			return $this->db->get('pasien')->result_array();
		}
	}
?>