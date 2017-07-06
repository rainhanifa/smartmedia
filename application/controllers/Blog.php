<?php
	defined('BASEPATH') OR exit ('No diect script access allowed');
	class Blog extends CI_COntroller{

		public function index()
		{
			$this->load->view('template/header.php');
			$this->load->view('blog/blog.php');
			$this->load->view('template/footer.php');
		}
	}
?>	