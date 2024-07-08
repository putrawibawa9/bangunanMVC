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
        $query ="INSERT INTO `testimoni` (`deskripsi_proyek`, `gambar_testimomi`) VALUES (:deskripsi_proyek, :gambar_testimomi)";
      $this->db->query($query);
       $this->db->bind('deskripsi_proyek', $data['deskripsi_proyek']);
       $this->db->bind('gambar_testimomi', $data['gambar_testimomi']);
       $this->db->execute();

         if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["gambar_proyek"])) {
              $tmp = $_FILES["gambar_proyek"]["tmp_name"];
              $fileName = $_FILES["gambar_proyek"]["name"];
            $ekstensiGambar = explode('.', $fileName); 
             $ekstensiGambar = strtolower(end($ekstensiGambar)); 
             }
                 //    For Image
     if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["gambar_proyek"])) {
        $tmp = $_FILES["gambar_proyek"]["tmp_name"];
       $fileNames = $_FILES["gambar_proyek"]["name"];
        for ($i = 0; $i < count($fileNames); $i++) {
             $fileName = $fileNames[$i];
             $ekstensiGambar = explode('.', $fileName); 
             $ekstensiGambar = strtolower(end($ekstensiGambar)); 
            $namaFileBaru = $data['nama_proyek'] . $counter++ ;
            $namaFileBaru .= '.';
            $namaFileBaru .= $ekstensiGambar;
             move_uploaded_file($tmp[$i], 'img/'.$namaFileBaru);
             $this->db->query("INSERT INTO `gambar_proyek` (`gambar_proyek`, `id_proyek`) VALUES (:gambar_proyek, :id_proyek)");
            $this->db->bind('gambar_proyek', $namaFileBaru);
            $this->db->bind('id_proyek', $id_proyek['id_proyek']);
            $this->db->execute();
        }
     }
       return $this->db->rowCount();
    }

     public function delete($id_blog){
        $this->db->query("DELETE FROM blog_sederhana WHERE `blog_sederhana`.`id_blog` = :id_blog");
        $this->db->bind('id_blog', $id_blog);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function viewOne($id_blog){
        $this->db->query("SELECT p.id_proyek, p.nama_proyek, gb.gambar_proyek, gb.id_gambar_proyek 
                            FROM proyek p
                            LEFT JOIN gambar_proyek gb ON p.id_proyek = gb.id_proyek
                            WHERE p.id_proyek = :id_blog
                            ORDER BY p.id_proyek, gb.gambar_proyek;");
        $this->db->bind('id_blog', $id_blog);
        return $this->db->resultSet();
    }

        public function update($data){
        $query = "UPDATE `blog_sederhana` SET `judul_blog` = :judul_blog, `deskripsi_blog` = :deskripsi_blog, `tanggal_pembuatan` = :tanggal_pembuatan WHERE `blog_sederhana`.`id_blog` = :id_blog";

      $this->db->query($query);
       $this->db->bind('judul_blog', $data['judul_blog']);
       $this->db->bind('deskripsi_blog', $data['deskripsi_blog']);
       $this->db->bind('tanggal_pembuatan', $data['tanggal_pembuatan']);
       $this->db->bind('id_blog', $data['id_blog']);

       $this->db->execute();
       return $this->db->rowCount();
    }
}