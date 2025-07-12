<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<h2>Data Dosen</h2>
<a href="<?= base_url('/dosen/create') ?>" class="btn btn-success mb-3">Tambah</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>NIP</th><th>Nama</th><th>Email</th><th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($dosen as $d): ?>
            <tr>
                <td><?= esc($d['nip']) ?></td>
                <td><?= esc($d['nama_dosen']) ?></td>
                <td><?= esc($d['email']) ?></td>
                <td>
                    <a href="<?= base_url('dosen/edit/' . $d['dosen_id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                    <form action="<?= base_url('dosen/delete/' . $d['dosen_id']) ?>" method="post" style="display:inline;" onsubmit="return confirm('Hapus data?');">
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?= $this->endSection() ?>
