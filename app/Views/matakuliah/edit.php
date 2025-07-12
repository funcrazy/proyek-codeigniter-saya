<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<h2>Edit Mata Kuliah</h2>

<form action="<?= base_url('/matakuliah/update/' . $matakuliah['mata_kuliah_id']) ?>" method="post">
  <div class="form-group">
    <label>Kode Mata Kuliah</label>
    <input type="text" name="kode_mata_kuliah" class="form-control" value="<?= esc($matakuliah['kode_mata_kuliah']) ?>" required>
  </div>
  <div class="form-group">
    <label>Nama Mata Kuliah</label>
    <input type="text" name="nama_mata_kuliah" class="form-control" value="<?= esc($matakuliah['nama_mata_kuliah']) ?>" required>
  </div>
  <div class="form-group">
    <label>Jumlah SKS</label>
    <input type="number" name="jumlah_sks" class="form-control" value="<?= esc($matakuliah['jumlah_sks']) ?>" required>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>

<?= $this->endSection() ?>
