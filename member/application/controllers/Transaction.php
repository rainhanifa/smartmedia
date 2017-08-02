<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Transaction extends CI_Controller {
		var $table	= 'transactions';
		var $user 	= '';

		function __construct() {
	        parent::__construct();
		     if (!$this->session->userdata('is_logged_in')){
		        redirect('auth/login');
		     }
		     $this->user 	= $this->session->userdata('is_active_id');
	    }
	    
		public function index(){
			$data['transactions']	=	$this->db->get_where($this->table, array('id_client' => $this->user))->result_array();
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('transaction/index.php', $data);
			$this->load->view('template/footer-member.php');
		}
		public function invoice(){
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('transaction/invoice.php');
			$this->load->view('template/footer-member.php');
		}
	}
