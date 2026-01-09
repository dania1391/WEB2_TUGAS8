<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>

<h2> Data Transaksi</h2>
<hr>
<a href="/detailtransaksi/new" class="btn btn-primary">Tambah Detail Transaksi</a>
<hr>
<table class="table table-bordered table-striped" id="dataTable">
    <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Id Transaksi</th>
            <th scope="col">Id Barang</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Subtotal</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($detailtransaksi)): ?>
            <?php $no = 1; ?>
            <?php foreach ($detailtransaksi as $dt): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $dt['transaksi_id'] ?></td>
                    <td><?= $dt['barang_id'] ?></td>
                    <td><?= $dt['jumlah'] ?></td>
                    <td><?= $dt['subtotal'] ?></td>
                    <td class="text-center">
                        <a href="<?= base_url('detailtransaksi/edit/' . $dt['id']) ?>"
                            class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i>
                        </a>

                        <a href="<?= base_url('detailtransaksi/delete/' . $dt['id']) ?>"
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