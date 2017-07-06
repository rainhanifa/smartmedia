<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Store extends CI_Controller {
		public function index(){
			redirect("store/details");
		}
		public function details(){
			$this->load->view('template/header.php');
			$this->load->view('store/detail.php');
			$this->load->view('template/footer.php');
		}
		public function theme(){
			$this->load->view('template/header.php');
			$this->load->view('store/theme.php');
			$this->load->view('template/footer.php');
		}
	}
