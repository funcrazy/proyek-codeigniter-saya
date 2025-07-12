<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<h2>Data Mahasiswa</h2>
<a href="<?= base_url('/mahasiswa/create') ?>" class="btn btn-success mb-3">Tambah</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>NIM</th><th>Nama</th><th>Email</th><th>Jurusan</th><th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($mahasiswa as $m): ?>
            <tr>
                <td><?= esc($m['nim']) ?></td>
                <td><?= esc($m['nama_mahasiswa']) ?></td>
                <td><?= esc($m['email']) ?></td>
                <td><?= esc($m['nama_jurusan']) ?></td>
                <td>
                    <a href="<?= base_url('mahasiswa/edit/' . $m['mahasiswa_id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                    <form action="<?= base_url('mahasiswa/delete/' . $m['mahasiswa_id']) ?>" method="post" style="display:inline;" onsubmit="return confirm('Hapus data?');">
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?= $this->endSection() ?>
