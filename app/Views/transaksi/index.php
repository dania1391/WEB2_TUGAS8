<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>

<h2> Data Transaksi</h2>
<hr>
<a href="/transaksi/new" class="btn btn-primary">Tambah Transaksi</a>
<hr>
<table class="table table-bordered table-striped" id="dataTable">
    <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Id Pelanggan</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Total</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($transaksi)): ?>
            <?php $no = 1; ?>
            <?php foreach ($transaksi as $t): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $t['pelanggan_id'] ?></td>
                    <td><?= $t['tanggal'] ?></td>
                    <td><?= $t['total'] ?></td>
                    <td class="text-center">
                        <a href="<?= base_url('transaksi/edit/' . $t['id']) ?>"
                            class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i>
                        </a>

                        <a href="<?= base_url('transaksi/delete/' . $t['id']) ?>"
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin ingin menghapus data ini?')">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5" class="text-center">Belum ada data</td>
            </tr>
        <?php endif; ?>
    </tbody>

</table>

<?= $this->endSection() ?>