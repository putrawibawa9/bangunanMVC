<div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-12 text-center">
        <img src="<?= BASEURL?>/img/KNA.jpeg" class="img-fluid" width="200px" alt="Logo Hanoman">
      </div>
    </div>
  </div>
  <div class="container">
  <div class="row">
    <div class="col-12 p-3 bg-white">
      <h4 class="text-center">Edit Blog</h4>
</div>
<div class="container">
  <div class="row">
    <div class="col-12 p-3 bg-white">
        <form method="post" action="<?= BASEURL?>/testimoni/update" enctype="multipart/form-data">
            <input type="hidden" name="id_testimoni" value="<?= $data['testimoni']['id_testimoni']?>">
            <input type="hidden" name="gambar_testimoni_lama" value="<?= $data['testimoni']['gambar_testimoni']?>">
      <div class="mb-3">
                <input type="text" value="<?= $data['testimoni']['nama_proyek']?>" name="lokasi_proyek" class="form-control"  placeholder="Lokasi Proyek" disabled>
            </div>      
            <div class="mb-3">
          <label for="message">Deskripsi testimoni:</label><br>
        <textarea name="deskripsi_testimoni" class="form-control" id="message" name="message"><?= $data['testimoni']['deskripsi_testimoni']?></textarea>
            </div>
              <div class="mb-3">
                <input type="file" name="gambar_testimoni">
              </div>
            <a href="<?=BASEURL?>/testimoni/viewtestimoni" class="btn btn-success" >Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
  </div>
</div>