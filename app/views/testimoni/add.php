<div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-12 text-center">
        <img src="<?= BASEURL?>/img/spDigital.png" class="img-fluid" width="200px" alt="Logo Hanoman">
      </div>
    </div>
  </div>
  <div class="container">
  <div class="row">
    <div class="col-12 p-3 bg-white">
      <h4 class="text-center">Tambah Blog</h4>
</div>
<div class="container">
  <div class="row">
    <div class="col-12 p-3 bg-white">
        <form method="post" action="<?= BASEURL?>/testimoni/save" enctype="multipart/form-data">
            <div class="mb-3">
                <select name="id_proyek" class="form-select" aria-label="Default select example">
                    <option selected>Pilih Proyek</option>
                    <?php foreach($data['proyek'] as $row) :?>
                    <option value="<?= $row['id_proyek']?>"><?= $row['nama_proyek']?></option>
                    <?php endforeach;?>
                </select>
            </div>      
            <div class="mb-3">
          <label for="message">Deskripsi testimoni:</label><br>
        <textarea name="deskripsi_testimoni" class="form-control" id="message" name="message"></textarea>
            </div>
              <div class="mb-3">
                <input type="file" multiple name="gambar_testimoni">
              </div>
            <a href="<?=BASEURL?>/testimoni/viewtestimoni" class="btn btn-success" >Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
  </div>
</div>