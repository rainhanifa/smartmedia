<?php
	defined('BASEPATH') OR exit ('No diect script access allowed');
	class Knowledgebase extends CI_COntroller{

		public function index()
		{
			$data['articles'] = $this->db->query('SELECT * FROM articles')->result_array();
			
			$string = 	$data['articles'][0]['content_articles'];
			$pos=strpos($string, ' ', 100);
			$data['string'] = substr($string,0,$pos ); 
			$this->load->view('template/header.php');
			$this->load->view('knowledgebase/faq.php',$data);
			$this->load->view('template/footer.php');
		}
		public function detail($id_articles = 0){

			$data['articles'] = $this->db->query("SELECT articles.*, article_category.name_category FROM articles
												 INNER JOIN article_category ON articles.category_articles = article_category.id_category WHERE id_articles = ".$id_articles)->result_array();
			$this->load->view('knowledgebase/detail-new.php', $data);
		}

	}
?>	