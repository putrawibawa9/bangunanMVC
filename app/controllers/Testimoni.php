<?php

class Testimoni extends Controller{
    public function viewTestimoni(){
         $data['testimoni'] = $this->model('Testimoni_model')->view();
          $this->view('templates/header', $data);
        $this->view('testimoni/index', $data);
        $this->view('templates/footer');
    }

      public function add(){
        $data['proyek'] = $this->model('Proyek_model')->viewAllProyek();
        $this->view('templates/header');
        $this->view('testimoni/add', $data);
        $this->view('templates/footer');
    }

      public function save(){
        if($this->model("Testimoni_model")->save($_POST) > 0){
            Flasher::setFlash('sucesfully', 'Added', 'success');
      header('Location: '. BASEURL . '/testimoni/viewTestimoni');
        }
    }

       public function delete($id_testimoni){
        if($this->model("Testimoni_model")->delete($id_testimoni) > 0){
            Flasher::setFlash('sucesfully', 'deleted', 'danger'); 
           header('Location: '. BASEURL . '/testimoni/viewTestimoni');
        }
    }

      public function viewOne($id_testimoni){
        $data['testimoni'] = $this->model('Testimoni_model')->viewOne($id_testimoni);
        $this->view('templates/header');
        $this->view('testimoni/edit', $data);
        $this->view('templates/footer');
    }

     public function update(){
        if($this->model("Testimoni_model")->update($_POST) > 0){
          Flasher::setFlash('sucesfully', 'updated', 'secondary'); 
           header('Location: '. BASEURL . '/testimoni/viewTestimoni');
        }
    }


}