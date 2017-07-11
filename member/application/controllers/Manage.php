<?php
	defined('BASEPATH') OR exit ('No diect script access allowed');
	class Manage extends CI_COntroller{

		function __construct() {
	        parent::__construct();
		     if (!$this->session->userdata('is_logged_in')){
		        redirect('auth/login');
		     }
	    }
	    
		public function index()
		{
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('manage/index.php');
			$this->load->view('template/footer-member.php');
		}

		public function dashboard()
		{
			$this->load->view('template/header-manage.php');
			$this->load->view('template/navbar-manage.php');
			$this->load->view('manage/dashboard.php');
			$this->load->view('template/footer-manage.php');
		}
	}
?>	