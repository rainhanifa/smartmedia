<?php
	defined('BASEPATH') OR exit ('No diect script access allowed');
	class Promo extends CI_COntroller{

		public function index()
		{
			$this->load->view('template/header.php');
			$this->load->view('promo/promo.php');
			$this->load->view('template/footer.php');
		}
	}
?>	