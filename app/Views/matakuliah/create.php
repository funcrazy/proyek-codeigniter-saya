<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<h2>Tambah Mata Kuliah</h2>

<form action="<?= base_url('/matakuliah/store') ?>" method="post">
  <div class="form-group">
    <label>Kode Mata Kuliah</label>
    <input type="text" name="kode_mata_kuliah" class="form-control" required>
  </div>
  <div class="form-group">
    <label>Nama Mata Kuliah</label>
    <input type="text" name="nama_mata_kuliah" class="form-control" required>
  </div>
  <div class="form-group">
    <label>Jumlah SKS</label>
    <input type="number" name="jumlah_sks" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>

<?= $this->endSection() ?>
