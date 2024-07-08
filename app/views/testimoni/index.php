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
                        <th class="text-center">ID</th>
                        <th class="text-center">Nama Proyek</th>
                        <th class="text-center">Testimoni</th>
                        <th class="text-center">Gambar</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <?php foreach($data['testimoni'] as $row) :?>
                            <td><?= $row['id_testimoni'] ?></td>
                            <td><?= htmlspecialchars($row['nama_proyek']) ?></td>
                            <td><?= htmlspecialchars($row['deskripsi_testimoni']) ?></td>
                            <td>
                                <img src="<?= BASEURL?>/img/<?= htmlspecialchars($row['gambar_testimoni']) ?>" alt="Gambar Proyek" width="100px">
                            <td>
                                <a href="<?= BASEURL?>/proyek/viewOne/<?= $id_proyek ?>">Edit</a>
                            </td>
                            <?php endforeach;?>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
