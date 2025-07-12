<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<h2>Data Jurusan</h2>
<a href="<?= base_url('/jurusan/create') ?>" class="btn btn-success mb-3">Tambah</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nama Jurusan</th><th>Fakultas</th><th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($jurusan as $j): ?>
            <tr>
                <td><?= esc($j['nama_jurusan']) ?></td>
                <td><?= esc($j['fakultas']) ?></td>
                <td>
                    <a href="<?= base_url('jurusan/edit/' . $j['jurusan_id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                    <form action="<?= base_url('jurusan/delete/' . $j['jurusan_id']) ?>" method="post" style="display:inline;" onsubmit="return confirm('Hapus data?');">
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?= $this->endSection() ?>
