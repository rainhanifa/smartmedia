<?php
	defined('BASEPATH') OR exit ('No diect script access allowed');
	class Reseller extends CI_COntroller{

		public function index()
		{
			$this->load->view('template/header.php');
			$this->load->view('reseller/reseller.php');
			$this->load->view('template/footer.php');
		}
	}
?>	