<?php
    class Transaction extends CI_Controller {

        function __construct(){
            parent::__construct();
            $this->load->model('Transaction_model');
            $this->load->model('Kota_model');
            $this->load->model('Vendor_model');
            $this->load->model('Status_model');
            if(!$this->session->userdata('username')){
                redirect('Login/index');
            }
        }

        public function index(){
            $data = [];
            $data['transaction'] = $this->Transaction_model->get_transaction();
            $data['status'] = $this->Transaction_model->get_button();

            $this->load->view('Transactionpage/TransactionPage', $data);
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

            redirect('loginadmin/index', 'refresh');
        }
    }
?>