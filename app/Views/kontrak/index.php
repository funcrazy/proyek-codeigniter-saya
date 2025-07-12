<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<h2>Data Kontrak</h2>
<a href="<?= base_url('/kontrak/create') ?>" class="btn btn-success mb-3">Tambah</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Mahasiswa</th>
            <th>Mata Kuliah</th>
            <th>Dosen</th>
            <th>Semester</th>
            <th>Nilai</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($kontrak as $k): ?>
        <tr>
            <td><?= esc($k['nama_mahasiswa']) ?></td>
            <td><?= esc($k['nama_mata_kuliah']) ?></td>
            <td><?= esc($k['nama_dosen']) ?></td>
            <td><?= esc($k['semester']) ?></td>
            <td><?= esc($k['nilai']) ?></td>
            <td>
                <a href="<?= base_url('kontrak/edit/' . $k['kontrak_id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                <form action="<?= base_url('kontrak/delete/' . $k['kontrak_id']) ?>" method="post" style="display:inline;" onsubmit="return confirm('Hapus data?');">
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?= $this->endSection() ?>
