<?php

class Gambar extends Controller{
    public function viewProyek(){
         $data['proyek'] = $this->model('Proyek_model')->view();
          $this->view('templates/header', $data);
        $this->view('proyek/index', $data);
        $this->view('templates/footer');
    }

      public function add(){
        $this->view('templates/header');
        $this->view('proyek/add');
        $this->view('templates/footer');
    }

      public function save(){
        if($this->model("Proyek_model")->save($_POST) > 0){
            Flasher::setFlash('sucesfully', 'Added', 'success');
      header('Location: '. BASEURL . '/proyek/add');
        }
    }

       public function delete($id_gambar_proyek){
        if($this->model("Gambar_model")->delete($id_gambar_proyek) > 0){
            Flasher::setFlash('sucesfully', 'deleted', 'danger'); 
           header('Location: '. BASEURL . '/proyek/viewProyek');
        }
    }

      public function viewOne($id_blog){
        $data['proyek'] = $this->model('Proyek_model')->viewOne($id_blog);
        $this->view('templates/header');
        $this->view('proyek/edit', $data);
        $this->view('templates/footer');
    }

     public function update(){
        if($this->model("Blog_model")->update($_POST) > 0){
          Flasher::setFlash('sucesfully', 'updated', 'secondary'); 
           header('Location: '. BASEURL . '/blog/viewBlog');
        }
    }


}