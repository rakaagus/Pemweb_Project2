<?php 
    class Rating_model extends CI_Model {
        private $table = "nilai_rating";
        
        public function getAll(){
            $query = $this->db->get($this->table);
            return $query->result();
        }
    }

?>