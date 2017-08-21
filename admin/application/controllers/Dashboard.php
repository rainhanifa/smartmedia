<?php
	defined('BASEPATH') OR exit ('No direct script access allowed');
	class Dashboard extends CI_COntroller{

		function __construct() {
	        parent::__construct();
		     if (!$this->session->userdata('admin_logged_in')){
		        redirect('auth/login');
		     }
	    }
 
		public function index()
		{
			$data['ticket'] = $this->db->query('SELECT *  FROM departments JOIN tickets ON departments.id_department = tickets.department_id GROUP BY tickets.id_ticket')->result_array();
			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('dashboard/index.php', $data);
			$this->load->view('template/footer-admin.php');
		}
	}
?>	