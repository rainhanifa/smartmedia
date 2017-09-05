<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Knowledgebase extends CI_Controller {
		var $table = "articles";
		var $table2 = "article_category";

		function __construct() {
	        parent::__construct();
		     if (!$this->session->userdata('is_logged_in')){
		        redirect('auth/login');
		     }
	    }

	    public function index(){
	    	redirect("knowledgebase/articles");
	    }

		public function articles($name = ""){

			$this->load->library('pagination');

			$config['base_url'] = base_url('knowledgebase/articles/').$name;
			$config['total_rows'] = $this->smartmedia->get_total_articles($name);
			$config['per_page'] = 10;

			$this->pagination->initialize($config);
			$data['paging']=$this->pagination->create_links();

			if($name != "")
				$offset 			= $this->uri->segment(4);
			else 
				$offset 			= $this->uri->segment(3);
			$data['articles'] 	= $this->smartmedia->get_articles($name, $config['per_page'], $offset);
			$data['categories'] = $this->db->get('article_category')->result_array();
			
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('knowledgebase/index.php', $data);
			$this->load->view('template/footer-member.php');
		}
		public function detail($id_articles = 0){

			$data['articles'] = $this->db->select("*")->from($this->table)
								->join($this->table2, $this->table.".category_articles = ".$this->table2.".id_category")
								->where(array("id_articles" => $id_articles))->get()->result_array();
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('knowledgebase/detail.php', $data);
			$this->load->view('template/footer-member.php');
		}
		
	}

		
		