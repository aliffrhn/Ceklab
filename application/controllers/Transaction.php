<?php
	class Transaction extends CI_Controller{

        function __construct(){
            parent::__construct();
            if(!$this->session->userdata('username')){
                redirect('Login/index');
            }
            $this->load->model('Transaction_model');
            $this->load->model('Kota_model');
            $this->load->model('Vendor_model');
            $this->load->model('Status_model');
            $this->load->library('session');
            $this->load->helper(array('form', 'url'));
         }

         public function index(){
            $data = [];
            $data['transaction'] = $this->Transaction_model->get_transaction();
            $data['status'] = $this->Transaction_model->get_button();
    
            $this->load->view('Transactionpage/TransactionPage', $data);
        }

		public function insertTransaction($pasien_id, $paket_periksa_id){
			$id_transaction = $this->Transaction_model->insertTransaction($pasien_id, $paket_periksa_id);
            
            redirect('Invoice/index/'.$id_transaction);
		}

		public function uploadImg(){
            $config['upload_path']          = './uploads/' ;//isi dengan nama folder temoat menyimpan gambar
			$config['allowed_types']        =  'jpeg|jpg|png';//isi dengan format/tipe gambar yang diterima
			$config['max_size']             =  2048;//isi dengan ukuran maksimum yang bisa di upload
			$config['max_width']            =  5000;//isi dengan lebar maksimum gambar yang bisa di upload
			$config['max_height']           =  5000;//isi dengan panjang maksimum gambar yang bisa di upload

            $this->load->library('upload', $config);
            // $this->upload->initialize($config);
            
			if( !$this->upload->do_upload('userfile')){
                $error = array('error' => $this->upload->display_errors());
                var_dump($config);
                var_dump($error);
			}else {
                $data = $this->upload->data('file_name');
            }
            
            $kode_transaksi = $this->input->post('transaction');

            // Transaksi
            $status = array(
                'status_id' => 2
            );
            
            $this->Transaction_model->changeStatusToTwo($status, $kode_transaksi);
            // $data['hasil'] = $this->Transaction_model->do_upload();
            
            //insert
            $this->Transaction_model->insertURLImg($kode_transaksi,$data);

			redirect('Transaction/index');
		}

        public function delete($id){
            // var_dump($id);
            $this->Transaction_model->delete_transaction($id);

            redirect('loginadmin/index', 'refresh');
        }

        public function edit($id){
            $data = [];
            $data['transaction'] = $this->Transaction_model->get_transactionByID($id);
            $data['kota'] = $this->Kota_model->getKota();
            $data['vendor'] = $this->Vendor_model->getVendor();
            $data['status'] = $this->Status_model->getStatus();

            $this->load->view('EditTransactionAdmin/EditTransactionAdmin', $data);
        }

        public function editForm(){
            // Transaksi
            $kode_transaksi = $this->input->post('kode_transaksi');
            $tanggal = date('y-m-d');
            $status_id = $this->input->post('status');

            // Paket Periksa
            $paket_periksa_id = $this->input->post('paket_periksa');
            $kota = $this->input->post('kota');
            $vendor = $this->input->post('vendor');

            // Pasien
            $id_pasien = $this->input->post('id_pasien');
            $umur = $this->input->post('umur');
            $gender = $this->input->post('gender');
            $phoneNumber = $this->input->post('phonenumber');
            $keterangan = $this->input->post('keterangan');
            $pasien = $this->input->post('pasien');

            // Transaksi
            $transaksi = array(
                'tanggal' => $tanggal,
                'status_id' => $status_id,
            );
            // var_dump($transaksi);

            // Paket Periksa
            $paket_periksa = array(
                'kota_id' => $kota,
                'vendor_id' => $vendor,
            );
            // var_dump($paket_periksa);

            // Pasien
            $pasien = array(
                'umur' => $umur,
                'gender' => $gender,
                'phone_number' => $phoneNumber,
                'keterangan' => $keterangan,
                'pasien' => $pasien
            );
            // var_dump($pasien, $id_pasien);

            $this->Transaction_model->editTransaction($kode_transaksi, $paket_periksa_id, $id_pasien, $transaksi, $paket_periksa, $pasien);
            
            redirect('loginadmin/index', 'refresh');
        }
    }
?>