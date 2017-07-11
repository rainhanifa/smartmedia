<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Profile extends CI_Controller {

		function __construct() {
	        parent::__construct();
		     if (!$this->session->userdata('admin_logged_in')){
		        redirect('auth/login');
		     }
	    }
	    
		public function index(){
			//tampil edit profile
		}
		public function account(){
			//page account setting
		}
		public function update_profile(){
			//action update
		}
		public function update_account(){
			//action update
		}
		
	}
