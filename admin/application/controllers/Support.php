<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Support extends CI_Controller {

		public function index(){
			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('support/departments.php');
			$this->load->view('template/footer-admin.php');
		}
		public function detail(){
			//detail ticket
		}
		public function open_ticket(){
			//action open
		}
		public function close_ticket(){
			//action close
		}
		public function delete_ticket(){
			//action delete
		}
	}
