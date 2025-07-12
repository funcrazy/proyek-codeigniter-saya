<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<h2>Tambah Kontrak</h2>

<form action="<?= base_url('/kontrak/store') ?>" method="post">
  <div class="form-group">
    <label>Mahasiswa</label>
    <select name="mahasiswa_id" class="form-control" required>
      <option value="">-- Pilih Mahasiswa --</option>
      <?php foreach ($mahasiswa as $m): ?>
        <option value="<?= $m['mahasiswa_id'] ?>"><?= $m['nama_mahasiswa'] ?></option>
      <?php endforeach ?>
    </select>
  </div>

  <div class="form-group">
    <label>Mata Kuliah</label>
    <select name="mata_kuliah_id" class="form-control" required>
      <option value="">-- Pilih Mata Kuliah --</option>
      <?php foreach ($mata_kuliah as $mk): ?>
        <option value="<?= $mk['mata_kuliah_id'] ?>"><?= $mk['nama_mata_kuliah'] ?></option>
      <?php endforeach ?>
    </select>
  </div>

  <div class="form-group">
    <label>Dosen</label>
    <select name="dosen_id" class="form-control" required>
      <option value="">-- Pilih Dosen --</option>
      <?php foreach ($dosen as $d): ?>
        <option value="<?= $d['dosen_id'] ?>"><?= $d['nama_dosen'] ?></option>
      <?php endforeach ?>
    </select>
  </div>

  <div class="form-group">
    <label>Semester</label>
    <input type="text" name="semester" class="form-control" required>
  </div>

  <div class="form-group">
    <label>Nilai</label>
    <input type="text" name="nilai" class="form-control">
  </div>

  <button type="submit" class="btn btn-primary">Simpan</button>
</form>

<?= $this->endSection() ?>
