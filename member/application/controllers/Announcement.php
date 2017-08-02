<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Announcement extends CI_Controller {
		var $table = "announcements";
 
		public function __construct() {
	        parent::__construct();
		    if (!$this->session->userdata('is_logged_in')){
		        redirect('auth/login');
		    }
	        $this->load->model('smartmedia');
	        $this->load->library("pagination");
	    }

		public function index(){
			$data['announcement'] = $this->db->order_by("date_announcement", "DESC")->get($this->table,1,0)->result_array();

		    $this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('announcement/detail.php', $data);
			$this->load->view('template/footer-member.php');
		}
	}
