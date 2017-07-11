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
	    }

		public function index(){
			$data['announcement'] = $this->db->query('SELECT * FROM announcements')->result_array();
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('announcement/index.php', $data);
			$this->load->view('template/footer-member.php');
		}
		public function detail($id_announcement = 0){
			$data['announcement'] = $this->db->query('SELECT * FROM announcements WHERE id_announcement = '.$id_announcement)->result_array();
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('announcement/detail.php',$data);
			$this->load->view('template/footer-member.php');
		}
	}
