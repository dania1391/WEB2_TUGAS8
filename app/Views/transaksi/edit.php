<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>

<h2 class="mb-4">Edit transaksi</h2>

<form action="/transaksi/update/<?= $transaksi['id'] ?>" method="post">
    <?= csrf_field(); ?>

    <div class="mb-3">
        <label class="form-label">Pelanggan</label>
        <select name="pelanggan_id" class="form-control" required>

            <?php foreach ($pelanggan as $p): ?>
                <option value="<?= $p['id']; ?>"
                    <?= $p['id'] == $transaksi['pelanggan_id'] ? 'selected' : ''; ?>>
                    <?= $p['id']; ?> - <?= $p['nama']; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Tanggal</label>
        <input type="date" name="tanggal" class="form-control" value="<?= $transaksi['tanggal'] ?>" required>
    </div>

    <div class="mb-3">
        <label>total</label>
        <input type="number" name="total" class="form-control" value="<?= $transaksi['total'] ?>" required>
    </div>

    <button class="btn btn-primary">Update</button>
    <a href="/transaksi" class="btn btn-secondary">Kembali</a>
</form>

<?= $this->endSection() ?>