<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>

<h2>Tambah transaksi</h2>
    <hr>
    <form action="/transaksi/create" method="post">
      <?= csrf_field(); ?>

      <div class="mb-3">
        <label class="form-label">Pelanggan</label>
        <select name="pelanggan_id" class="form-control" required>
          <option value="">-- Pilih Pelanggan --</option>
          <?php foreach ($pelanggan as $p): ?>
            <option value="<?= $p['id']; ?>">
              <?= $p['id']; ?> - <?= $p['nama']; ?>
            </option>
          <?php endforeach; ?>
        </select>
      </div>

      <div class="mb-3">
        <label class="form-label">Tanggal</label>
        <input type="date" name="tanggal" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Total</label>
        <input type="number" name="total" class="form-control" required>
      </div>

      <button class="btn btn-success">Simpan</button>
      <a href="/transaksi" class="btn btn-secondary">Kembali</a>
    </form>

<?= $this->endSection() ?>