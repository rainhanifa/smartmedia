<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Transaction extends CI_Controller {
		public function index(){
			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('transaction/transaction.php');
			$this->load->view('template/footer-admin.php');
		}
		public function invoice(){
			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('transaction/detail_invoice.php');
			$this->load->view('template/footer-admin.php');
		}
		public function awaiting(){
			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('transaction/transaction_awaiting.php');
			$this->load->view('template/footer-admin.php');
		}
		public function confirm(){
			//action confirm
		}
		public function voucher(){
			//list voucher activated
		}
	}
