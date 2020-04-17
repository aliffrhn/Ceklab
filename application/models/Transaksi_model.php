<?php
	class Transaksi_model extends CI_Model{

		public function getTransactions() {
			$query = $this->db->get('transaksi');
			var_dump($query)
		}
	}
?>