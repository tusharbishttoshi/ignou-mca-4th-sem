<?php
    class Mymodel extends CI_model{
        public function get_all($table){
            $q = $this->db->get($table);
            return $q->result();
        }
        
        public function insert($table, $data){
            $q = $this->db->insert($table, $data);
            return $this->db->insert_id();
        }
        
        public function update($table, $where, $data){
            $q = $this->db->where($where)
                        ->update($table, $data);
            if($q){return true;}
        }
        
        public function update_all($table, $where, $ids, $data){
            $q = $this->db->where_in($where, $ids)
                        ->update($table, $data);
            if($q){return true;}
        }
        
        public function select_one($select, $where, $table){
            $q = $this->db->select($select)
                            ->where($where)
                            ->get($table);
            return $q->row();
        }
        
        public function selcet_limit($select, $table, $where, $orderby, $limit, $start, $order='asc'){
            $q = $this->db->select($select)
                            ->where($where)
                            ->order_by($orderby, $order)
                            ->limit($limit, $start)
                            ->get($table);
            return $q->result();
        }
        public function selcet_all_where($select, $table, $where){
            $q = $this->db->select($select)
                            ->where($where)
                            ->get($table);
            return $q->result();
        }
        
        public function count_all($table){
            $q = $this->db->count_all($table);
            return $q;
        }
        
        public function count_where($table, $where){
            $q = $this->db->where($where)
                        ->get($table);
            return $q->num_rows();
        }
        
        public function join1($select, $where, $start, $limit, $orderby, $order, $table, $table2, $condition, $type){
            $q = $this->db->select($select)
                            ->where($where)
                            ->limit($limit, $start)
                            ->join($table2, $condition, $type)
                            ->order_by($orderby, $order)
                            ->get($table);
            return $q->result();
        }
        
        public function join2($select, $where, $start, $table, $table2, $table3, $condition, $condition2, $type, $orderby){
            $q = $this->db->select($select)
                            ->where($where)
                            ->limit(100, $start)
                            ->join($table2, $condition, $type)
                            ->join($table3, $condition1, $type)
                            ->order_by($orderby, 'DESC')
                            ->get($table);
            return $q->result();
        }
        
        public function delete($table, $where){
            $q = $this->db->where($where)
                            ->delete($table);
            if($q){return true;}
        } 
        public function delete_all($table, $where, $ids){
            $q = $this->db->where_in($where, $ids)
                            ->delete($table);
            if($q){return true;}
        } 
    }
    
?>