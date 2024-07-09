<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
</head>
<body class="admin-body" >

<div class="container bg-white">
    <div class="row">
        <div class="col-12">
        <nav class="navbar navbar-expand-lg bg-white">
  <div class="container-fluid">
    <a class="navbar-brand " href="#">KNA Construction</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?= BASEURL;?>/proyek/viewProyek">Proyek</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL;?>/gambarProyek/viewGambar">Gambar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL;?>/testimoni/viewTestimoni">Testimoni</a>
        </li>
      </ul>
    </div>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link" href="<?= BASEURL;?>/auth/login">Keluar</a>
      </div>
    </div>
  </div>
</nav>
        </div>