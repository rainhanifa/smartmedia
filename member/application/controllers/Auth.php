<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Auth extends CI_Controller {
		public function index(){
			redirect("auth/login");
		}
		public function login(){
			$this->load->view('template/header.php');
			$this->load->view('auth/login.php');
			$this->load->view('template/footer.php');
		}
		public function register(){
			$this->load->view('template/header.php');
			$this->load->view('about/register.php');
			$this->load->view('template/footer.php');
		}
		public function registersuccess(){
			$this->load->view('template/header.php');
			$this->load->view('about/register-success.php');
			$this->load->view('template/footer.php');
		}
		public function verification(){
			$this->load->view('template/header.php');
			$this->load->view('about/verification-success.php');
			$this->load->view('template/footer.php');
		}
	}
