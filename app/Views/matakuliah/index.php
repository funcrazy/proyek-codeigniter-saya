<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<h2>Data Mata Kuliah</h2>
<a href="<?= base_url('/matakuliah/create') ?>" class="btn btn-success mb-3">Tambah</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Kode</th><th>Nama</th><th>SKS</th><th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($matakuliah as $mk): ?>
            <tr>
                <td><?= esc($mk['kode_mata_kuliah']) ?></td>
                <td><?= esc($mk['nama_mata_kuliah']) ?></td>
                <td><?= esc($mk['jumlah_sks']) ?></td>
                <td>
                    <a href="<?= base_url('matakuliah/edit/' . $mk['mata_kuliah_id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                    <form action="<?= base_url('matakuliah/delete/' . $mk['mata_kuliah_id']) ?>" method="post" style="display:inline;" onsubmit="return confirm('Hapus data?');">
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?= $this->endSection() ?>
