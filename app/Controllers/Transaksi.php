<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TransaksiModel;
use App\Models\PelangganModel;
use CodeIgniter\HTTP\ResponseInterface;

class Transaksi extends BaseController
{
    protected $transaksi;
    public function __construct()
    {
        $this->transaksi = new TransaksiModel();
    }

    public function index()
    {
        $data['transaksi'] = $this->transaksi->findAll();
        return view('transaksi/index', $data);
    }

    public function new()
    {
        $pelangganModel = new PelangganModel();
        $data['pelanggan'] = $pelangganModel->findAll();
        return view('transaksi/create', $data);
    }


    public function create()
    {
        $this->transaksi->insert([
            'pelanggan_id'     => $this->request->getPost('pelanggan_id'),
            'tanggal'          => $this->request->getPost('tanggal'),
            'total'            => $this->request->getPost('total'),
        ]);

        return redirect()->to('/transaksi');
    }

    public function edit($id)
    {
        $pelangganModel = new PelangganModel();
        $data['pelanggan'] = $pelangganModel->findAll();
        $data['transaksi'] = $this->transaksi->find($id);
        return view('transaksi/edit', $data);
    }

    public function update($id)
    {
        $this->transaksi->update($id, [
            'pelanggan_id'     => $this->request->getPost('pelanggan_id'),
            'tanggal'          => $this->request->getPost('tanggal'),
            'total'            => $this->request->getPost('total'),
        ]);

        return redirect()->to('/transaksi');
    }

    public function delete($id)
    {
        $this->transaksi->delete($id);
        return redirect()->to('/transaksi');
    }
}
