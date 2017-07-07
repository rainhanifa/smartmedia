<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Support extends CI_Controller {
		/*var $table = "tickets, departments";*/
 
		public function __construct() {
	        parent::__construct();
	        $this->load->model('smartmedia');
	    }

		public function index(){
			$data['ticket'] = $this->db->query('SELECT * FROM tickets')->result_array();
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('support/index.php',$data);
			$this->load->view('template/footer-member.php');
		}
		public function new_ticket(){
			$dataz['department'] = $this->db->query('SELECT * FROM departments')->result_array();
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('support/new_ticket.php',$dataz);
			$this->load->view('template/footer-member.php');
		}
		public function open_ticket(){
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('support/open_ticket.php');
			$this->load->view('template/footer-member.php');
		}
		public function detail(){
			
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('support/detail_ticket.php');
			$this->load->view('template/footer-member.php');
		}
	}
