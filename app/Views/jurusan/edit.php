<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<h2>Edit Jurusan</h2>

<form action="<?= base_url('/jurusan/update/' . $jurusan['jurusan_id']) ?>" method="post">
  <div class="form-group">
    <label>Nama Jurusan</label>
    <input type="text" name="nama_jurusan" class="form-control" value="<?= esc($jurusan['nama_jurusan']) ?>" required>
  </div>
  <div class="form-group">
    <label>Fakultas</label>
    <input type="text" name="fakultas" class="form-control" value="<?= esc($jurusan['fakultas']) ?>" required>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>

<?= $this->endSection() ?>
