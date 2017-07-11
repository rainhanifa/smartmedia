<?php 
	Class Smartmedia extends CI_Model{
		var $table = 'announcements'; 

		public function update($where, $data){
			$this->db->update($this->table, $data, $where);
			return $this->db->affected_rows();
		}

		public function delete($id){
			$this->db->where('id', $id);
			return $this->db->delete($this->table);
		}
		
		function save($data){
			$this->db->insert($this->table, $data);
			return true;
		}

		function get_by_id($where = []){
			$query = $this->db->from($this->table);

			if(count($where) > 0) { $query->where($where); }

			return $query->get()->result();
		}

		public function record_count($table) {
            return $this->db->count_all($table);
        }

        public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("announcements");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }
	}
?>