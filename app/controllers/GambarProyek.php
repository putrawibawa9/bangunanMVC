<?php

class GambarProyek extends Controller{
    public function viewGambar(){
         $data['gambarProyek'] = $this->model('GambarProyek_model')->view();
          $this->view('templates/header', $data);
        $this->view('gambarProyek/index', $data);
        $this->view('templates/footer');
    }

      public function add(){
        $data = $this->model('Proyek_model')->viewAllProyek();
        $this->view('templates/header');
        $this->view('gambarProyek/add', $data);
        $this->view('templates/footer');
    }

      public function save(){
        if($this->model("GambarProyek_model")->save($_POST) > 0){
            Flasher::setFlash('sucesfully', 'Added', 'success');
      header('Location: '. BASEURL . '/gambarProyek/viewGambar');
        }
    }

       public function delete($id_gambar_proyek){
        if($this->model("GambarProyek_model")->delete($id_gambar_proyek) > 0){
            Flasher::setFlash('sucesfully', 'deleted', 'danger'); 
           header('Location: '. BASEURL . '/gambarProyek/viewGambar');
        }
    }

      public function viewOne($id_proyek){
        $data['proyek'] = $this->model('GambarProyek_model')->viewOne($id_proyek);
        $this->view('templates/header');
        $this->view('gambarProyek/edit', $data);
        $this->view('templates/footer');
    }

     public function update(){
        if($this->model("Blog_model")->update($_POST) > 0){
          Flasher::setFlash('sucesfully', 'updated', 'secondary'); 
           header('Location: '. BASEURL . '/blog/viewBlog');
        }
    }


}