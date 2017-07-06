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
			$this->load->view('auth/register.php');
			$this->load->view('template/footer.php');
		}
		public function registersuccess(){
			$this->load->view('template/header.php');
			$this->load->view('auth/register-success.php');
			$this->load->view('template/footer.php');
		}
		public function verification(){
			$this->load->view('template/header.php');
			$this->load->view('auth/verification-success.php');
			$this->load->view('template/footer.php');
		}

		public function doLogin(){
			//success, redirect to
			redirect(base_url("member"));
			//failed, redirect to index
		}
	}
