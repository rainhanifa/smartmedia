<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Users extends CI_Controller {
		public function index(){
			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('user/user.php');
			$this->load->view('template/footer-admin.php');
		}
		public function add(){
			//page add
		}
		public function update(){
			//page update
		}
		public function deactivate(){
			//action delete
		}
		public function reset_password(){

		}
		public function level(){

		}
		public function level_add(){

		}
		public function level_update(){

		}
		public function level_delete(){

		}
	}
