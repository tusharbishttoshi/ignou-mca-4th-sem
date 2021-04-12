<?php
	class Mymodel extends CI_Model{

		public function get_1($select, $table, $where){
			$q = $this->db->select($select)
					->where($where)
					->get($table);
			return $q->row();
		}

		public function insert_data($table, $data)
		{
			$q = $this->db->insert($table, $data);
			if($q){ return $this->db->insert_id(); }else{ return false; }
		}

	//Update Query
		public function update($table, $where, $data)
		{
			$q = $this->db
						->where($where)
						->update($table, $data);
			if($q){ return true; }else{ return false; }
		}
	// delete query

		//Select all with orderd	
		public function select_all($select, $table, $oname, $order)
		{
			$q = $this->db
					->select($select)
					->order_by($oname, $order)
					->get($table);
			return $q->result();
		}
		
		public function select_all_where($select, $where, $table)
		{
			$q = $this->db
					->select($select)
					->where($where)
					->get($table);
			return $q->result();
		}
		
	//Select all with limit
		public function select_all_limit($select, $where, $table, $oname, $order, $limit, $start)
		{
			$q = $this->db
						->select($select)
						->where($where)
						->order_by($oname, $order)
						->limit($limit, $start)
						->get($table);
			return $q->result();
		}
        
    

		public function delete($table, $where)
		{
			$q = $this->db->delete($table, $where);
			if($q){ return true; }else{ return false; }
		}
		
        public function count_all($tabel){
			return $this->db->count_all_results($tabel);
		}

		public function count_where($tabel,$where){
			return $this->db
						->where($where)
						->count_all_results($tabel);
		}

	}
	
?>