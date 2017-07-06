<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Support extends CI_Controller {

		public function index(){
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('support/index.php');
			$this->load->view('template/footer-member.php');
		}
		public function new_ticket(){
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('support/new_ticket.php');
			$this->load->view('template/footer-member.php');
		}
		public function open_ticket(){
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('support/open_ticket.php');
			$this->load->view('template/footer-member.php');
		}
		public function detail(){
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('support/detail_ticket.php');
			$this->load->view('template/footer-member.php');
		}
	}
