<?php 
    class Komentar_model extends CI_Model {
        private $table = "komentar";
        private $view = "v_komentar";

        public function saveComment($data){
            $sql = "INSERT INTO komentar (tanggal, isi, user_id, nilai_rating_id, tempat_wisata_id)
            Values (?, ?, ?, ?, ?)";
            $this->db->query($sql, $data);
        }

        public function getAll(){
            $query = $this->db->get($this->view);
            return $query->result();
        }

        // $sql = "CREATE VIEW v_komentar AS SELECT k.tanggal, k.isi, u.username, r.nama_rating, w.nama
        // FROM komentar AS k
        // INNER JOIN user AS u ON k.user_id = u.id
        // INNER JOIN nilai_rating AS r ON k.nilai_rating_id = r.id
        // INNER JOIN tempat_wisata AS w ON k.tempat_wisata_id = w.id;";

        public function delete(){
            $sql = "DELETE FROM komentar WHERE id=?";
            $this->db->query($sql, array($id));
        }
    }

?>