<?php
	defined('BASEPATH') OR exit ('No direct script access allowed');

	class Dashboard extends CI_COntroller{
		var $user_id;

		function __construct() {
	        parent::__construct();
		     if (!$this->session->userdata('is_logged_in')){
		        redirect('auth/login');
		     }
		     $user_id = $this->session->userdata("is_active_cid");
	    }

		public function index()
		{
			$where 	= array("client_id" => $this->session->userdata("is_active_cid"));
			$where2 = array("client_id" => $this->session->userdata("is_active_cid"),
							"status_payment" => 0
							);

			$data['ticket'] = $this->db->query('SELECT DISTINCT tickets.id, tickets.id_ticket, 
								min(tickets.date_ticket) as open_date,
								max(tickets.date_ticket) as latest_date,
								departments.name_department,
								tickets.subject_ticket,
								tickets.status_ticket
								FROM departments JOIN tickets
								ON departments.id_department = tickets.department_id
								WHERE tickets.client_id = '.$this->session->userdata("is_active_cid").' GROUP BY tickets.id_ticket')->result_array();
			
			$data['transactions'] = $this->db->get_where("transactions", $where2)->result_array();
			$data['my_site'] = $this->db->get_where("sites", $where)->num_rows();
			$data['my_invoice'] = $this->db->get_where("transactions", $where2)->num_rows();
			$data['my_tickets'] = $this->db->get_where("tickets", $where)->num_rows();

			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('dashboard/index.php', $data);
			$this->load->view('template/footer-member.php');
		}
	}