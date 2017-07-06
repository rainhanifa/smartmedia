<?php
	defined('BASEPATH') OR exit ('No diect script access allowed');
	class Service extends CI_COntroller{

		public function index()
		{
			$this->load->view('template/header.php');
			$this->load->view('service/service.php');
			$this->load->view('template/footer.php');
		}
	}
?>	