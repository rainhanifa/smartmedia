<?php
	defined('BASEPATH') OR exit ('No diect script access allowed');
	class Dashboard extends CI_COntroller{

		function __construct() {
	        parent::__construct();
		     if (!$this->session->userdata('is_logged_in')){
		        redirect('auth/login');
		     }
	    }

		public function index()
		{
			$data['ticket'] = $this->db->query('SELECT tickets.id, tickets.date_ticket, departments.name_department, tickets.subject_ticket, tickets.status_ticket from departments JOIN tickets ON departments.id_department = tickets.department_id ')->result_array();
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('dashboard/index.php', $data);
			$this->load->view('template/footer-member.php');
		}
	}
?>	