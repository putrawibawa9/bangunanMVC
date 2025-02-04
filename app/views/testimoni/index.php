<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-12 text-center">
            <img src="<?= BASEURL?>/img/KNA.jpeg" class="img-fluid" width="200px" alt="Logo SP Digital">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 p-3 bg-white">
            <h4 class="text-center">Data Testimoni</h4>
            <p class="text-center">Selamat datang <span class="text-primary"><?= $_COOKIE['admin']?></span> </p>
            <div class="text-center">
                <a class="btn btn-primary btn-sm" href="<?= BASEURL;?>/testimoni/add">Tambah Data Testimoni</a>
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
                    <?php foreach($data['testimoni'] as $row) :?>
                        <tr>
                            <td><?= $row['id_testimoni'] ?></td>
                            <td><?= htmlspecialchars($row['nama_proyek']) ?></td>
                            <td><?= htmlspecialchars($row['deskripsi_testimoni']) ?></td>
                            <td>
                                <img src="<?= BASEURL?>/img/testimoni/<?= htmlspecialchars($row['gambar_testimoni']) ?>" alt="Gambar Testimoni" width="100px">
                            <td>
                                <a class="btn btn-secondary" href="<?= BASEURL?>/testimoni/viewOne/<?= $row['id_testimoni'] ?>">Edit</a>
                                <a class="btn btn-danger" href="<?= BASEURL?>/testimoni/delete/<?= $row['id_testimoni'] ?>">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>
