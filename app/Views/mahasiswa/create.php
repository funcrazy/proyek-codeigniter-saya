<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<h2>Tambah Mahasiswa</h2>

<form action="<?= base_url('/mahasiswa/store') ?>" method="post">
  <div class="form-group">
    <label>NIM</label>
    <input type="text" name="nim" class="form-control" required>
  </div>
  <div class="form-group">
    <label>Nama Mahasiswa</label>
    <input type="text" name="nama_mahasiswa" class="form-control" required>
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" name="email" class="form-control" required>
  </div>
  <div class="form-group">
    <label>Tanggal Lahir</label>
    <input type="date" name="tgl_lahir" class="form-control">
  </div>
  <div class="form-group">
    <label>Alamat</label>
    <textarea name="alamat" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label>Propinsi</label>
    <input type="text" name="propinsi" class="form-control">
  </div>
  <div class="form-group">
    <label>No. HP</label>
    <input type="text" name="no_hp" class="form-control">
  </div>
  <div class="form-group">
    <label>Jurusan</label>
    <select name="jurusan_id" class="form-control" required>
      <option value="">-- Pilih Jurusan --</option>
      <?php foreach ($jurusan as $j): ?>
        <option value="<?= $j['jurusan_id'] ?>"><?= $j['nama_jurusan'] ?></option>
      <?php endforeach ?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>

<?= $this->endSection() ?>
