<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<h2>Tambah Dosen</h2>

<form action="<?= base_url('/dosen/store') ?>" method="post">
  <div class="form-group">
    <label>NIP</label>
    <input type="text" name="nip" class="form-control" required>
  </div>
  <div class="form-group">
    <label>Nama Dosen</label>
    <input type="text" name="nama_dosen" class="form-control" required>
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" name="email" class="form-control">
  </div>
  <div class="form-group">
    <label>Alamat</label>
    <textarea name="alamat" class="form-control"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>

<?= $this->endSection() ?>
