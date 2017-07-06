<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Transaction extends CI_Controller {
		public function index(){
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('transaction/index.php');
			$this->load->view('template/footer-member.php');
		}
		public function invoice(){
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('transaction/invoice.php');
			$this->load->view('template/footer-member.php');
		}
	}
