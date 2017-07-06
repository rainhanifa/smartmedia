<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Announcement extends CI_Controller {
		public function index(){
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('announcement/index.php');
			$this->load->view('template/footer-member.php');
		}
		public function detail(){
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('announcement/detail.php');
			$this->load->view('template/footer-member.php');
		}
	}
