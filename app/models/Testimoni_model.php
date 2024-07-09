<?php

class Testimoni_model{
    private $db;
    // private $target_dir = $_SERVER["DOCUMENT_ROOT"] ."/bangunanMVC/public/img";

public function __construct ()
{
    $this->db = new Database;
}

public function view(){
       $this->db->query("SELECT 
    p.id_proyek,
    p.nama_proyek,
    p.lokasi_proyek,
    p.tanggal_proyek,
    p.size_proyek,
    p.budget_proyek,
    p.deskripsi_proyek,
    t.id_testimoni,
    t.deskripsi_testimoni,
    t.gambar_testimoni
FROM 
    proyek p
JOIN 
    testimoni t
ON 
    p.id_proyek = t.id_proyek;");
       return $this->db->resultSet();
    }

    public function lastID(){
        $this->db->query("SELECT MAX(id_proyek) as id_proyek FROM proyek;");
       $this->db->execute();
        return $this->db->single();
    }

    public function save($data){
        var_dump($_FILES);
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["gambar_testimoni"])) {
              $tmp = $_FILES["gambar_testimoni"]["tmp_name"];
              $fileName = $_FILES["gambar_testimoni"]["name"];
            $ekstensiGambar = explode('.', $fileName); 
             $ekstensiGambar = strtolower(end($ekstensiGambar)); 
            $namaFileBaru =substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 10);
            $namaFileBaru .= '.';
            $namaFileBaru .= $ekstensiGambar;
            move_uploaded_file($tmp, 'img/testimoni/'.$namaFileBaru);
             }
        $query ="INSERT INTO `testimoni` (`id_proyek`,`deskripsi_testimoni`, `gambar_testimoni`) VALUES (:id_proyek, :deskripsi_testimoni, :gambar_testimoni)";
      $this->db->query($query);
       $this->db->bind('id_proyek', $data['id_proyek']);
       $this->db->bind('deskripsi_testimoni', $data['deskripsi_testimoni']);
       $this->db->bind('gambar_testimoni', $namaFileBaru);
       $this->db->execute();
       return $this->db->rowCount();
    }

     public function delete($id_testimoni){
        $this->db->query("DELETE FROM testimoni WHERE `testimoni`.`id_testimoni` = :id_testimoni");
        $this->db->bind('id_testimoni', $id_testimoni);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function viewOne($id_testimoni){
        $this->db->query("SELECT *
                            FROM testimoni 
                            JOIN proyek ON testimoni.id_proyek = proyek.id_proyek
                            WHERE id_testimoni = :id_testimoni;");
        $this->db->bind('id_testimoni', $id_testimoni);
        return $this->db->single();
    }

        public function update($data){
            if($_FILES['gambar_testimoni']['error'] === 4){
                $gambar_testimoni = $data['gambar_testimoni_lama'];
            }else{
            $tmp = $_FILES["gambar_testimoni"]["tmp_name"];
            $fileName = $_FILES["gambar_testimoni"]["name"];
            $ekstensiGambar = explode('.', $fileName); 
            $ekstensiGambar = strtolower(end($ekstensiGambar)); 
            $gambar_testimoni =substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 10);
            $gambar_testimoni .= '.';
            $gambar_testimoni .= $ekstensiGambar;
            move_uploaded_file($tmp, 'img/testimoni/'.$gambar_testimoni);

            }

        $query = "UPDATE `testimoni` SET `deskripsi_testimoni` = :deskripsi_testimoni, `gambar_testimoni` = :gambar_testimoni WHERE `testimoni`.`id_testimoni` = :id_testimoni";

      $this->db->query($query);
       $this->db->bind('deskripsi_testimoni', $data['deskripsi_testimoni']);
       $this->db->bind('gambar_testimoni', $gambar_testimoni);
       $this->db->bind('id_testimoni', $data['id_testimoni']);

       $this->db->execute();
       return $this->db->rowCount();
    }
}