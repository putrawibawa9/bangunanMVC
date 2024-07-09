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
      <h4 class="text-center">Tambah Foto</h4>
</div>
<div class="container">
  <div class="row">
    <div class="col-12 p-3 bg-white">
        <form method="post" action="<?= BASEURL?>/gambarProyek/save" enctype="multipart/form-data">
              <select name="id_proyek" class="form-select" aria-label="Default select example">
                    <option selected>Pilih Proyek</option>
                    <?php foreach($data as $row) :?>
                    <option value="<?= $row['id_proyek']?>"><?= $row['nama_proyek']?></option>
                    <?php endforeach;?>
                </select>
              <div class="mb-3">
                <input type="file" multiple name="gambar_proyek[]">
              </div>
            <a href="<?=BASEURL?>/gambarProyek/viewGambar" class="btn btn-success" >Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
  </div>
</div>