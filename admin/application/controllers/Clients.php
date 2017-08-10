<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Clients extends CI_Controller {
		var $table	= "clients";
		public function index(){
			$data['clients'] = $this->db->select("*")->from($this->table)->join("app_users as u", $this->table.'.user_id = u.id_users')->get()->result_array();

			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('clients/clients.php', $data);
			$this->load->view('template/footer-admin.php');
		}
		public function profile($cid = 0){
			$where 	= array("clients.id_client" => $cid);
			$where2	= array("clients.id_client" => $cid, "t.status_payment" => 0);

			$data['profile'] = $this->db->select("*")->from($this->table)->join("app_users as u", $this->table.'.user_id = u.id_users')
							->where($where)->get()->result_array();
			$data['invoice'] = $this->db->select("*")->from($this->table)->join("transactions as t", $this->table.'.id_client = t.client_id')
							->where($where)->get()->result_array();
			$data['sites'] = $this->db->select("*")->from($this->table)->join("sites as s", $this->table.'.id_client = s.client_id')
							->where($where)->get()->result_array();
			$data['packages'] = $this->db->select("*")->from($this->table)->join("clients_package as cp", $this->table.'.id_client = cp.client_id')
							->where($where)->get()->result_array();
			$data['total_invoice']	= $this->db->select("*")->from($this->table)->join("transactions as t", $this->table.'.id_client = t.client_id')
							->where($where)->get()->num_rows();
			$data['invoice_due']	= $this->db->select("*")->from($this->table)->join("transactions as t", $this->table.'.id_client = t.client_id')
							->where($where2)->get()->num_rows();
			$data['outstanding']	= $this->db->select("COALESCE(SUM(t.total), 0) as outstanding")->from($this->table)
										->join("transactions as t", $this->table.'.id_client = t.client_id')
										->where($where2)->get()->result_array();
										
			$data['total_site']		= $this->db->select("*")->from($this->table)
										->join("sites as s", $this->table.'.id_client = s.client_id')
										->where($where)->get()->num_rows(); 

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
