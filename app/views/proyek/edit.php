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
      <h4 class="text-center">Edit Proyek</h4>
</div>
<div class="container">
  <div class="row">
    <div class="col-12 p-3 bg-white">
        <form method="post" action="<?= BASEURL?>/proyek/update" enctype="multipart/form-data">
          <input type="hidden" name="id_proyek" value="<?= $data['proyek']['id_proyek']?>">
            <div class="mb-3">
                <input type="text" value="<?= $data['proyek']['nama_proyek']?>" name="nama_proyek" class="form-control"  placeholder="Nama Proyek">
            </div>
            <div class="mb-3">
                <input type="text" value="<?= $data['proyek']['lokasi_proyek']?>" name="lokasi_proyek" class="form-control"  placeholder="Lokasi Proyek">
            </div>
            <div class="mb-3">
                <input type="date" value="<?= $data['proyek']['tanggal_proyek']?>" name="tanggal_proyek" class="form-control"  placeholder="Nama Proyek">
            </div>
            <div class="mb-3">
                <input type="text" value="<?= $data['proyek']['size_proyek']?>" name="size_proyek" class="form-control"  placeholder="Size Proyek">
            </div>
            <div class="mb-3">
                <input type="text" value="<?= $data['proyek']['budget_proyek']?>" name="budget_proyek" class="form-control"  placeholder="Budget Proyek">
            </div>
            <div class="mb-3">
          <label for="message">Deskripsi Proyek:</label><br>
        <textarea name="deskripsi_proyek" class="form-control" id="message" name="message"><?= $data['proyek']['deskripsi_proyek']?></textarea>
            </div>
            <a href="<?=BASEURL?>/proyek/viewProyek" class="btn btn-success" >Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
  </div>
</div>