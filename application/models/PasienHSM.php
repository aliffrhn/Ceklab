<?php
	class PasienHSM extends CI_Model{

		protected $_table = 'pasien';

		public function insert_new_pasien($data){
			$query = $this->db->insert('pasien',$data);
			$insert_id = $this->db->insert_id();
		
			return ($insert_id);
		}
		

	}
?>