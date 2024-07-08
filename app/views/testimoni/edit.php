
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-12 text-center">
            <img src="<?= BASEURL?>/img/spDigital.png" class="img-fluid" width="200px" alt="Logo SP Digital">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 p-3 bg-white">
            <h4 class="text-center">Data Proyek</h4>
            <p class="text-center">Selamat datang <span class="text-primary"><?= $_COOKIE['admin']?></span> </p>
            <div class="text-center">
                <a class="btn btn-primary btn-sm" href="<?= BASEURL;?>/blog/add">Tambah Data Blog</a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <?php Flasher::flash()?>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 p-3 bg-white">
            <table class="table table-bordered" id="pengaduanTable">
                <thead>
                    <tr>
                        <th class="text-center">Gambar</th>
                        <th class="text-center">Hapus</th>
                    </tr>
                </thead>
                <tbody>
               
            
                  <?php  foreach ($data['proyek'] as $row) : ?>
      
                        <tr>
                            <td>
                              <img src="<?= BASEURL;?>/img/<?= $row['gambar_proyek'] ?>" width="100px">
                            </td>
                            <td>
                                <a class="btn btn-danger" href="<?= BASEURL?>/gambar/delete/<?= $row['id_gambar_proyek'] ?>">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
