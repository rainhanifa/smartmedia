<?php 
	Class Smartmedia extends CI_Model{ 

		public function get_articles($where, $number, $offset){
			if($where != ''){
				$where  	= array("name_category" => $where);
				return $this->db->select('*')->from($this->table)
								->join($this->table2, $this->table.".category_articles = ".$this->table2.".id_category")
								->where($where)
								->limit($number, $offset)
								->get()->result_array();
			}else {
				return $this->db->get('articles',$number,$offset)->result_array();
			}
		}

		public function get_total_articles($where){
			if($where != ''){
				$where  	= array("name_category" => $where);
				return $this->db->select('*')->from($this->table)
								->join($this->table2, $this->table.".category_articles = ".$this->table2.".id_category")
								->where($where)->get()->num_rows();
			}else {
				return $this->db->get('articles')->num_rows();
			}
		}

	}
?>