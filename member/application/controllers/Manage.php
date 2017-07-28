<?php
	defined('BASEPATH') OR exit ('No direct script access allowed');
	
	class Manage extends CI_COntroller{
		var $table	=	"sites";

		function __construct() {
	        parent::__construct();
		     if (!$this->session->userdata('is_logged_in')){
		        redirect('auth/login');
		     }
	    }
	    
		public function index()
		{
			$data['sites'] = $this->db->get_where($this->table, array('client_id =' => $this->session->userdata('is_active_id')))->result_array();
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('manage/index.php', $data);
			$this->load->view('template/footer-member.php');
		}

		public function dashboard()
		{
			$this->load->view('template/header-manage.php');
			$this->load->view('template/navbar-manage.php');
			$this->load->view('manage/dashboard.php');
			$this->load->view('template/footer-manage.php');
		}

		function createsite(){

			if(isset($_POST['submit'])){
				$sitename		= $this->input->post("sitename");
				$siteaddress	= $this->input->post("siteaddress");
				$sitedesc		= $this->input->post("sitedesc");
				$webmail		= $this->input->post("webmail");

				$sitedata		= array("name_site" => $sitename,
										"address_site" => $siteaddress,
										"description_site" => $sitedesc,
										"client_id"	=> $this->session->userdata("is_active_id"),
										"date_registered" => date("Y-m-d H:i:s")
									);
				if($this->db->insert("sites",$sitedata)){
					redirect(base_url()."./../web-builder");
				}
				else{
					$this->session->set_flashdata("message","Failed to save site! ".$this->db->error());	
					redirect(base_url("manage"));
				}
				var_dump($this->db->error());
			}
		}
	}
?>	