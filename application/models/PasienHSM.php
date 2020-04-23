<?php
	class PasienHSM extends CI_Model{

		protected $_table = 'pasien';

		/*public function getAllMahasiswa()
		{
			//use query builder to get data table "mahasiswa"
			return $this->db->get('pasien')->result_array();
		}*/

		/*if (isset($_POST['submit'])) {
			$gender = $_POST['gender'];
        	$pasien = $_POST['pasien'];
        	$umur = $_POST['umur'];
        	$phone_number = $_POST['phone_number'];
        	$alamat = $_POST['alamat'];
			$tanggal = $_POST['tanggal'];
			$waktu = $_POST['waktu'];
			$keterangan = $_POST['keterangan'];

			$input = "INSERT INTO pasien(gender, pasien, umur, phone_number, alamat, tanggal, waktu, keterangan) VALUES ('$gender','$pasien','$umur','$phone_number','$alamat','$tanggal','$waktu','$keterangan')";
			$query_input = mysqli_query($conn, $input);		
		} */

		public function insert_new_pasien($data){
			$query = $this->db->insert('pasien',$data);
			$insert_id = $this->db->insert_id();
		
			return ($insert_id);
			//var_dump($data);
		}
		

	}
?>