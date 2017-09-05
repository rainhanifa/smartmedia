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

			$data['invoices'] 		=  $this->db->select("*")->from("transactions")
										->where(array("status_payment" => 1))
										->get()->result_array();
			$data['tickets'] =  $this->db->select("*")->from("tickets")
								->join("departments", "tickets.department_id = departments.id_department")
								->where(array("status_ticket <" => 3))
								->get()->result_array();

			$data['active_tickets'] =  $this->db->select("*")->from("tickets")
										->join("departments", "tickets.department_id = departments.id_department")
										->where(array("status_ticket <" => 3))
										->get()->num_rows();
			$data['awaitings'] 		=  $this->db->select("*")->from("transactions")
										->where(array("status_payment" => 1))
										->get()->num_rows();
			//lifetime total
			$data['total_user']		=	$this->db->get("clients")->num_rows();
			$data['total_sites']		=	$this->db->get("sites")->num_rows();
			$data['total_articles']		=	$this->db->get("articles")->num_rows();
			$data['total_activation']	=	$this->db->get_where("vouchers", array("status" => 1))->num_rows();

			//weekly new
			$start_date 	= date("Y-m-d", strtotime("-7 days"));
			$end_date		= date("Y-m-d");

			//			user
			$where  		= "date_registered BETWEEN '$start_date' AND '$end_date'";
			$data['weekly_user']		=	$this->db->get_where("clients", $where)->num_rows();
			//			sites
			$data['weekly_site']		=	$this->db->get_where("sites", $where)->num_rows();
			//			activation
			$data['weekly_activation']		=	$this->db->get_where("vouchers", "used_at BETWEEN '$start_date' AND '$end_date'")->num_rows();
			//			paid
			$data['weekly_paid']		=	$this->db->get_where("transactions", "date_payment BETWEEN '$start_date' AND '$end_date'")->num_rows();
			//			ticket
			$data['weekly_ticket']		=	$this->db->get_where("tickets", "date_open_ticket BETWEEN '$start_date' AND '$end_date'")->num_rows();
			
			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('dashboard/index.php', $data);
			$this->load->view('template/footer-admin.php');
		}
	}