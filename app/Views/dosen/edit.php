<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<h2>Edit Dosen</h2>

<form action="<?= base_url('/dosen/update/' . $dosen['dosen_id']) ?>" method="post">
  <div class="form-group">
    <label>NIP</label>
    <input type="text" name="nip" class="form-control" value="<?= esc($dosen['nip']) ?>" required>
  </div>
  <div class="form-group">
    <label>Nama Dosen</label>
    <input type="text" name="nama_dosen" class="form-control" value="<?= esc($dosen['nama_dosen']) ?>" required>
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" name="email" class="form-control" value="<?= esc($dosen['email']) ?>">
  </div>
  <div class="form-group">
    <label>Alamat</label>
    <textarea name="alamat" class="form-control"><?= esc($dosen['alamat']) ?></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>

<?= $this->endSection() ?>
