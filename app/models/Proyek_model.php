<?php

class Proyek_model{
    private $db;
    // private $target_dir = $_SERVER["DOCUMENT_ROOT"] ."/bangunanMVC/public/img";

public function __construct ()
{
    $this->db = new Database;
}

public function viewAllProyek(){
    $this->db->query("SELECT * FROM proyek");
    return $this->db->resultSet();
}


    public function lastID(){
        $this->db->query("SELECT MAX(id_proyek) as id_proyek FROM proyek;");
       $this->db->execute();
        return $this->db->single();
    }

    public function save($data){
        $query ="INSERT INTO `proyek` (`nama_proyek`, `lokasi_proyek`, `tanggal_proyek`, `size_proyek`, `budget_proyek`, `deskripsi_proyek`) VALUES (:nama_proyek, :lokasi_proyek, :tanggal_proyek, :size_proyek, :budget_proyek, :deskripsi_proyek)";
      $this->db->query($query);
       $this->db->bind('nama_proyek', $data['nama_proyek']);
       $this->db->bind('lokasi_proyek', $data['lokasi_proyek']);
       $this->db->bind('tanggal_proyek', $data['tanggal_proyek']);
       $this->db->bind('size_proyek', $data['size_proyek']);
       $this->db->bind('budget_proyek', $data['budget_proyek']);
       $this->db->bind('deskripsi_proyek', $data['deskripsi_proyek']);
       $this->db->execute();
       return $this->db->rowCount();
    }

     public function delete($id_proyek){
        $this->db->query("DELETE FROM proyek WHERE `proyek`.`id_proyek` = :id_proyek");
        $this->db->bind('id_proyek', $id_proyek);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function viewOne($id_proyek){
        $this->db->query("SELECT * 
                            FROM proyek 
                            WHERE id_proyek = :id_proyek;");
        $this->db->bind('id_proyek', $id_proyek);
        return $this->db->single();
    }

        public function update($data){
        $query = "UPDATE `proyek` SET `nama_proyek` = :nama_proyek, `lokasi_proyek` = :lokasi_proyek, `tanggal_proyek` = :tanggal_proyek, `size_proyek` = :size_proyek, `budget_proyek` = :budget_proyek, `deskripsi_proyek` = :deskripsi_proyek WHERE `proyek`.`id_proyek` = :id_proyek";

      $this->db->query($query);
       $this->db->bind('nama_proyek', $data['nama_proyek']);
       $this->db->bind('lokasi_proyek', $data['lokasi_proyek']);
       $this->db->bind('tanggal_proyek', $data['tanggal_proyek']);
       $this->db->bind('size_proyek', $data['size_proyek']);
       $this->db->bind('budget_proyek', $data['budget_proyek']);
       $this->db->bind('deskripsi_proyek', $data['deskripsi_proyek']);
       $this->db->bind('id_proyek', $data['id_proyek']);

       $this->db->execute();
       return $this->db->rowCount();
    }
}