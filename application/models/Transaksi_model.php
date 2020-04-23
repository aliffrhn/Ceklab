<?php
	class Transaksi_model extends CI_Model{

		public function getTransactions($kode_transaksi) {

			/*$query = "SELECT * FROM transaksi JOIN paket_periksa USING paket_periksa_id JOIN pemeriksaan USING pemeriksaan_id WHERE kode_transaksi = '$kode_transaksi'";*/
			$this->db->select ( '*' ); 
		    $this->db->from ( 'transaksi' );
		    $this->db->join('pasien', 'pasien.id_pasien = transaksi.id_pasien');
		    $this->db->join ( 'paket_periksa', 'paket_periksa.paket_periksa_id = transaksi.paket_periksa_id');
		    $this->db->join ( 'pemeriksaan', 'pemeriksaan.pemeriksaan_id = paket_periksa.pemeriksaan_id');
		    $this->db->join ('vendor_lab', 'vendor_lab.vendor_id = paket_periksa.vendor_id');
		    $this->db->join ('kota', 'kota.kota_id = paket_periksa.kota_id');
		    $this->db->where ( 'transaksi.kode_transaksi', $kode_transaksi);
		    $query = $this->db->get();
		    return $query->row_array();
		    /*$baca = $this->db->query($query)->result_array();*/
		    //var_dump($query[0]);
			//ßreturn $query->result_array();

			//var_dump($baca[0]);
			
		}

		public function insertTransaction($pasien_id, $paket_periksa_id){
			$username = 'test'/*$this->session->userdata('username')*/;
			$status_id = 2;
			$tanggal = date('d-m-y');


			$data = array (
				'username'=>$username,
				'tanggal'=>$tanggal,
				'status_id' =>$status_id,
				'paket_periksa_id'=>$paket_periksa_id,
				'id_pasien'=>$pasien_id
			);
			//var_dump($data);
			$this->db->insert('transaksi', $data);

			$idTransaksi = $this->db->insert_id();
			return $idTransaksi;	

		}

		/*public function do_upload()
        {
               
                $config['upload_path']          = './uploads/' ;//isi dengan nama folder temoat menyimpan gambar
                $config['allowed_types']        =  'gif|jpg|png';//isi dengan format/tipe gambar yang diterima
                $config['max_size']             =  100;//isi dengan ukuran maksimum yang bisa di upload
                $config['max_width']            =  1024;//isi dengan lebar maksimum gambar yang bisa di upload
                $config['max_height']           = 768;//isi dengan panjang maksimum gambar yang bisa di upload

                $this->load->library('upload', $config);

                //lengkapi kondisi berikut
                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
			            
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
			           
                }
        }

        }*/

        /*public function save($upload){

		    $data = array(
		      'deskripsi'=>$this->input->post('input_deskripsi'),
		      'nama_file' => $upload['file']['file_name'],
		      'ukuran_file' => $upload['file']['file_size'],
		      'tipe_file' => $upload['file']['file_type']
		    );
	    
	    	$this->db->insert('transaksi', $data);
	  }*/


	}
?>