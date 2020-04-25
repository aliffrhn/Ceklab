<?php
    class Transaction_model extends CI_Model {

        public function get_transaction(){
            $username = $this->session->userdata('username');

            $this->db->select('*');
            $this->db->from('transaksi');
            $this->db->where('username', $username);
            $this->db->join('paket_periksa', 'paket_periksa.paket_periksa_id = transaksi.paket_periksa_id');
            $this->db->join('pasien', 'pasien.id_pasien = transaksi.id_pasien');
            $this->db->join('status', 'status.status_id = transaksi.status_id');
            $this->db->join('kota', 'kota.kota_id = paket_periksa.kota_id');
            $this->db->join('vendor_lab', 'vendor_lab.vendor_id = paket_periksa.vendor_id');
            $this->db->order_by("kode_transaksi", "desc");
            
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

        public function getTransactions($kode_transaksi) {
			$this->db->select( '*' ); 
		    $this->db->from( 'transaksi' );
		    $this->db->join('pasien', 'pasien.id_pasien = transaksi.id_pasien');
		    $this->db->join( 'paket_periksa', 'paket_periksa.paket_periksa_id = transaksi.paket_periksa_id');
		    $this->db->join( 'pemeriksaan', 'pemeriksaan.pemeriksaan_id = paket_periksa.pemeriksaan_id');
		    $this->db->join('vendor_lab', 'vendor_lab.vendor_id = paket_periksa.vendor_id');
		    $this->db->join('kota', 'kota.kota_id = paket_periksa.kota_id');
		    $this->db->where( 'transaksi.kode_transaksi', $kode_transaksi);
		    $query = $this->db->get();
		    return $query->row_array(); 
		}

		public function insertTransaction($pasien_id, $paket_periksa_id){
			$username = $this->session->userdata('username');
			$status_id = 1;
			$tanggal = date('d-m-y');

			$data = array (
				'username'=>$username,
				'tanggal'=>$tanggal,
				'status_id' =>$status_id,
				'paket_periksa_id'=>$paket_periksa_id,
				'id_pasien'=>$pasien_id
            );
            
			$this->db->insert('transaksi', $data);

			$idTransaksi = $this->db->insert_id();
			return $idTransaksi;	

		}

        public function editTransaction($transaksi, $paket_periksa, $pasien){
            // Update Transaksi
            $this->db->set($transaksi);
            $this->db->where('kode_transaksi', $kode_transaksi);
            $this->db->update('transaksi');

            // Update Paket Periksa
            $this->db->set($paket_periksa);
            $this->db->where('paket_periksa_id', $paket_periksa_id);
            $this->db->update('paket_periksa');

            // Update Pasien
            $this->db->set($pasien);
            $this->db->where('id_pasien', $id_pasien);
            $this->db->update('pasien');
        }

        public function changeStatusToTwo($status, $kode_transaksi){
            // Update Transaksi
            $this->db->set($status);
            $this->db->where('kode_transaksi', $kode_transaksi);
            $this->db->update('transaksi');
        }
    }
?>