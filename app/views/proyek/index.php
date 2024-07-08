
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
                        <th class="text-center">No</th>
                        <th class="text-center">Nama Proyek</th>
                        <th class="text-center">Gambar</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $i = 1;
                    $projectImages = [];
                    foreach ($data['proyek'] as $row) {
                        $projectImages[$row['id_proyek']]['nama_proyek'] = $row['nama_proyek'];
                        $projectImages[$row['id_proyek']]['images'][] = $row['gambar_proyek'];
                    }
                    foreach ($projectImages as $id_proyek => $project): ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= htmlspecialchars($project['nama_proyek']) ?></td>
                            <td>
                                    <?php foreach ($project['images'] as $image): ?>
                                        <img src="<?= BASEURL ?>/img/proyek<?= $image?>" width="100px">
                                    <?php endforeach; ?>
                            </td>
                            <td>
                                <a href="<?= BASEURL?>/proyek/viewOne/<?= $id_proyek ?>">Edit</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
