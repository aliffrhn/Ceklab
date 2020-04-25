<?php 
	class CaraPakai extends CI_Controller {


		function __construct(){
            parent::__construct();
        }


		public function index(){
			$this->load->view('Carapakai/carapakai');
		}

	}


?>