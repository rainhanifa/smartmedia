<?php
	defined('BASEPATH') OR exit ('No direct script access allowed');
	class About extends CI_COntroller{

		public function index()
		{
			$this->load->view('template/header.php');
			$this->load->view('about/about.php');
			$this->load->view('template/footer.php');
		}
	}
?>	