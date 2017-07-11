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
			$data['announcement'] = $this->db->query('SELECT * FROM announcements')->result_array();
		    $config["base_url"] = base_url() . "announcements/example1";
		    $config["total_rows"] = $this->smartmedia->record_count("announcements");
		    $config["per_page"] = 20;
		    $config["uri_segment"] = 3;
		    $choice = $config["total_rows"] / $config["per_page"];
		    $config["num_links"] = round($choice);

		    $this->pagination->initialize($config);

		    $page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
		    $data["results"] = $this->smartmedia->fetch_countries($config["per_page"], $page);
		    $data["links"] = $this->pagination->create_links();

		    $this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('announcement/index.php', $data);
			$this->load->view('template/footer-member.php');
		}
		public function detail($id_announcement = 0){
			$data['announcement'] = $this->db->query('SELECT * FROM announcements WHERE id_announcement = '.$id_announcement)->result_array();
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('announcement/detail.php', $data);
			$this->load->view('template/footer-member.php');
		}
		public function example1() {
		}
	}
