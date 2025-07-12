<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<h2>Tambah Jurusan</h2>

<form action="<?= base_url('/jurusan/store') ?>" method="post">
  <div class="form-group">
    <label>Nama Jurusan</label>
    <input type="text" name="nama_jurusan" class="form-control" required>
  </div>
  <div class="form-group">
    <label>Fakultas</label>
    <input type="text" name="fakultas" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>

<?= $this->endSection() ?>
