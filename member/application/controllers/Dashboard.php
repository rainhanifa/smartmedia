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
			$data['ticket'] = $this->db->query('SELECT DISTINCT tickets.id, tickets.id_ticket,  min(tickets.date_ticket) as open_date, max(tickets.date_ticket) as latest_date, departments.name_department, tickets.subject_ticket, tickets.status_ticket FROM departments JOIN tickets ON departments.id_department = tickets.department_id GROUP BY tickets.id_ticket')->result_array();
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('dashboard/index.php', $data);
			$this->load->view('template/footer-member.php');
		}
	}
?>	