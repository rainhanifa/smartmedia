<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class User extends CI_Controller {
		function __construct() {
	        parent::__construct();
		     if (!$this->session->userdata('is_logged_in')){
		        redirect('auth/login');
		     }
	    }
		public function index(){
			redirect("user/edit");
		}
		public function edit(){
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('user/edit.php');
			$this->load->view('template/footer-member.php');
		}
		public function acc_setting(){
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('user/acc_setting.php');
			$this->load->view('template/footer-member.php');
		}
	}
