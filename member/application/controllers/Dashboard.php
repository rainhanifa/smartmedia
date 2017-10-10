<?php
	defined('BASEPATH') OR exit ('No direct script access allowed');

	class Dashboard extends CI_COntroller{
		var $user_id;

		function __construct() {
	        parent::__construct();
		     if (!$this->session->userdata('is_logged_in')){
		        redirect('auth/login');
		     }
		     $this->user_id = $this->session->userdata("is_active_cid");
	    }

		public function index()
		{
			
			$where = array("client_id" => $this->user_id);

			$where2 = array("client_id" => $this->user_id,
							"status_payment" => 0
							);

			$where3 = array("client_id" => $this->user_id,
							"status_ticket <" => 3
							);
			$data['tickets']  	= $this->db->select("*")
									->from("tickets AS t")
									->join("departments AS d","t.department_id = d.id_department")
									->where($where3)
									->get()
									->result_array();
			
			$data['transactions'] = $this->db->get_where("transactions", $where2)->result_array();

			$data['my_site'] = $this->db->get_where("sites", $where)->num_rows();
			$data['my_invoice'] = $this->db->get_where("transactions", $where2)->num_rows();
			$data['my_tickets'] = $this->db->get_where("tickets", $where3)->num_rows();

			$data['js']			=	array('assets/data-tables/jquery.dataTables.js', 'assets/data-tables/bootstrap3/dataTables.bootstrap.js');
			$data['page_js']	=	$this->load->view('custom-script/dashboard', '', TRUE);
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('dashboard/index.php', $data);
			$this->load->view('template/footer-member.php');
		}
	}