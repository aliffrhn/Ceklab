<?php
	class Transaksi_model extends CI_Model{

		public function getTransactions($kode_transaksi) {

			//$kode_transaksi = $this->session->userdata('kode_transaksi');
			//$sql = "select * from transaksi where kode_transaksi= ?"
			//$query = $this->db->query('select * from transaksi where kode_transaksi='.$kode_transaksi);
			$query = "SELECT * transaksi WHERE kode_transaksi = $kode_transaksi";
			$baca = $this->db->query($query)->result_array();
			//var_dump($query);

			if($baca->num_rows() > 0){
        		foreach ($query->result() as $data){
            		$hasil[] = array(
		                'kode_transaksi'=>$data->kode_transaksi,
		                'tanggal'=>$data->tanggal,
		                'paket_periksa_id'=>$data->paket_periksa_id,
		                'pasien'=>$data->pasien,
		                'umur'=>$data->umur,
		                'gender'=>$data->gender,
		                'phone_number'=>$data->phone_number,
		                'vendor_id'=>$data->vendor_id,
		                'kota_id'=>$data->kota_id,
		                'username'=>$data->username,
		                //'pemeriksaan_id'=>$data->status,
		                'keterangan'=>$data->keterangan,
		                //'status_id'=>$data->status_id,
            		);
        		}
        		return($hasil);
			}else{
				return false;
			}
		}
	}
?>