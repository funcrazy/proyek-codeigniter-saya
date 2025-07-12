<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<h2>Selamat Datang</h2>
<p class="lead">Silakan pilih menu di bawah ini:</p>

<div class="row text-center">
  <div class="col-12 col-md-2 offset-md-1 mb-2">
    <a href="<?= base_url('/mahasiswa') ?>" class="btn btn-primary w-100">Mahasiswa</a>
  </div>
  <div class="col-12 col-md-2 mb-2">
    <a href="<?= base_url('/dosen') ?>" class="btn btn-success w-100">Dosen</a>
  </div>
  <div class="col-12 col-md-2 mb-2">
    <a href="<?= base_url('/jurusan') ?>" class="btn btn-warning w-100">Jurusan</a>
  </div>
  <div class="col-12 col-md-2 mb-2">
    <a href="<?= base_url('/matakuliah') ?>" class="btn btn-info w-100">Mata Kuliah</a>
  </div>
  <div class="col-12 col-md-2 mb-2">
    <a href="<?= base_url('/kontrak') ?>" class="btn btn-dark w-100">Kontrak</a>
  </div>
</div>

<?= $this->endSection() ?>
