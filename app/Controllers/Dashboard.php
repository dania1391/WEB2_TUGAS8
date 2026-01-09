<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\PelangganModel;
use App\Models\TransaksiModel;
use App\Models\DetailTransaksiModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $barangModel   = new BarangModel();
        $pelangganModel = new PelangganModel();
        $transaksiModel = new TransaksiModel();
        $detailModel    = new DetailTransaksiModel();

        $data = [
            'totalBarang'     => $barangModel->countAll(),
            'totalPelanggan'  => $pelangganModel->countAll(),
            'totalTransaksi'  => $transaksiModel->countAll(),
            'totalDetail'     => $detailModel->countAll(),
        ];

        return view('dashboard/index', $data);
    }
}
