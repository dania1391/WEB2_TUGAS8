<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

<div class="row">

    <!-- Barang -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Barang
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?= $totalBarang ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-box fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pelanggan -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Pelanggan
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?= $totalPelanggan ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-tag fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Transaksi -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Transaksi
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?= $totalTransaksi ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-cash-register fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Detail Transaksi -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                            Detail Transaksi
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?= $totalDetail ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-list-alt fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Tambahan Informasi (Tanpa Button) -->
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Informasi Sistem</h6>
            </div>
            <div class="card-body">
                <p class="mb-0">
                    Dashboard ini menampilkan ringkasan data sistem penjualan
                    berupa jumlah barang, pelanggan, transaksi, dan detail transaksi
                    secara real-time dari database.
                </p>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
