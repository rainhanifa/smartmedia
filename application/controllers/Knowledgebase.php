<?php
	defined('BASEPATH') OR exit ('No diect script access allowed');
	class Knowledgebase extends CI_COntroller{

		public function index()
		{
			$this->load->view('template/header.php');
			$this->load->view('knowledgebase/faq.php');
			$this->load->view('template/footer.php');
		}
	}
?>	