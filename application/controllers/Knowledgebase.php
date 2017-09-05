<?php
	defined('BASEPATH') OR exit ('No diect script access allowed');
	class Knowledgebase extends CI_COntroller{

		public function index($name = "")
		{
			$this->load->library('pagination');

			$config['base_url'] = base_url('knowledgebase/').$name;
			$config['total_rows'] = $this->smartmedia->get_total_articles($name);
			$config['per_page'] = 10;

			$this->pagination->initialize($config);
			$data['paging']=$this->pagination->create_links();

			if($name != "")
				$offset 			= $this->uri->segment(3);
			else 
				$offset 			= $this->uri->segment(2);
			$data['articles'] 	= $this->smartmedia->get_articles($name, $config['per_page'], $offset);
			$data['categories'] = $this->db->get('article_category')->result_array();
			
			$this->load->view('knowledgebase/index.php',$data);
		}
		public function detail($id_articles = 0){

			$data['articles'] = $this->db->query("SELECT articles.*, article_category.name_category FROM articles
												 INNER JOIN article_category ON articles.category_articles = article_category.id_category WHERE id_articles = ".$id_articles)->result_array();
			$this->load->view('knowledgebase/detail-new.php', $data);
		}

	}
