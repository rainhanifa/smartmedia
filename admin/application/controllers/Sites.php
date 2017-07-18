<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Sites extends CI_Controller {
		var $table	= "sites";

		public function index(){
			$this->db->select("*");
			$this->db->from($this->table);
			$this->db->join("clients", "client_id = id_client");
			$data['sites']	= $this->db->get()->result_array();

			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('sites/index.php', $data);
			$this->load->view('template/footer-admin.php');
		}
		
		public function detail(){
			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('sites/detail.php');
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
