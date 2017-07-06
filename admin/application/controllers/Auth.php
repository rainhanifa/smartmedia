<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Auth extends CI_Controller {
		public function index(){
			redirect("auth/login");
		}
		public function login(){
			$this->load->view('auth/login.php');
		}
		public function register(){
			
		}
	}
