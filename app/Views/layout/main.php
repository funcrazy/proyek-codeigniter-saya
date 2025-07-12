<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Web Enterprise</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?= base_url('/') ?>">Home</a>
  
  <div class="collapse navbar-collapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item"><a class="nav-link" href="<?= base_url('/mahasiswa') ?>">Mahasiswa</a></li>
      <li class="nav-item"><a class="nav-link" href="<?= base_url('/dosen') ?>">Dosen</a></li>
      <li class="nav-item"><a class="nav-link" href="<?= base_url('/jurusan') ?>">Jurusan</a></li>
      <li class="nav-item"><a class="nav-link" href="<?= base_url('/matakuliah') ?>">Mata Kuliah</a></li>
      <li class="nav-item"><a class="nav-link" href="<?= base_url('/kontrak') ?>">Kontrak</a></li>
    </ul>

    <?php if(session()->has('username')): ?>
      <span class="navbar-text text-white mr-2">
        Halo, <?= esc(session()->get('username')) ?>
      </span>
      <a href="<?= base_url('/login/logout') ?>" class="btn btn-sm btn-outline-danger">Logout</a>
    <?php endif; ?>
  </div>
</nav>

<div class="container mt-4">
  <?= $this->renderSection('content') ?>
</div>

</body>
</html>
