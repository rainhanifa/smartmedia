<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Clients extends CI_Controller {
		public function index(){
			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('clients/clients.php');
			$this->load->view('template/footer-admin.php');
		}
		public function profile(){
			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('clients/clients_profile.php');
			$this->load->view('template/footer-admin.php');
		}
		public function detail(){
			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('clients/detail_invoice.php');
			$this->load->view('template/footer-admin.php');
		}
		public function add(){
			// add page	
		}
		public function update(){
			// update page
		}
		public function delete(){
			// delete
		}

	}
