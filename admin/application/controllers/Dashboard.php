<?php
	defined('BASEPATH') OR exit ('No diect script access allowed');
	class Dashboard extends CI_COntroller{

		public function index()
		{
			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('dashboard/index.php');
			$this->load->view('template/footer-admin.php');
		}
	}
?>	