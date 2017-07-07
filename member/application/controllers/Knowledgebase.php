<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Knowledgebase extends CI_Controller {
		var $table = "articles";

		public function index(){
			$data['articles'] = $this->db->query('SELECT articles.*, article_category.name_category FROM articles
												 INNER JOIN article_category ON articles.category_articles = article_category.id_category')->result_array();
			
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('knowledgebase/index.php', $data);
			$this->load->view('template/footer-member.php');
		}
		public function detail(){
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('knowledgebase/detail.php', $data);
			$this->load->view('template/footer-member.php');
		}
	}
