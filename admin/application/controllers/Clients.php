<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Clients extends CI_Controller {
		var $table	= "clients";
		public function index(){
			$this->db->select("*");
			$this->db->from($this->table);
			$this->db->join("app_users as u", $this->table.'.user_id = u.id_users');
			$data['clients']	= $this->db->get()->result_array();

			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('clients/clients.php', $data);
			$this->load->view('template/footer-admin.php');
		}
		public function profile($uid = 0){
			$data['profile']	= $this->db->get_where($this->table, array('id_client =' => $uid))->result_array(); 

			$query_sites		= "SELECT * FROM clients JOIN sites ON clients.id_client = sites.client_id WHERE clients.id_client = ".$uid;
			$data['sites']		= $this->db->query($query_sites)->result_array(); 
			$data['total_site']	= $this->db->query($query_sites)->num_rows(); 
			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('clients/clients_profile.php', $data);
			$this->load->view('template/footer-admin.php');
		}
		public function detail(){
			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('clients/detail_invoice.php');
			$this->load->view('template/footer-admin.php');
		}
		public function add(){
			// add page	
		}
		public function update(){
			// update page
		}
		public function delete(){
			// delete
		}

	}
