<?php
require_once __DIR__ . '/../models/BarangModel.php';

class BarangController
{
    public function tambah(): void
    {
        $pesan = '';
        $error = '';
        $data = [
            'kode_barang' => '',
            'nama_barang' => '',
            'kategori' => '',
            'harga' => '',
            'stok' => '',
        ];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            foreach ($data as $key => $_) {
                $data[$key] = trim((string) ($_POST[$key] ?? ''));
            }

            if (
                $data['kode_barang'] === '' ||
                $data['nama_barang'] === '' ||
                $data['kategori'] === '' ||
                !is_numeric($data['harga']) ||
                !ctype_digit($data['stok'])
            ) {
                $error = 'Periksa kembali data yang diisi. Harga dan stok harus berupa angka.';
            } else {
                try {
                    $model = new BarangModel();
                    if ($model->simpan($data)) {
                        $pesan = 'Data barang berhasil disimpan.';
                        $data = array_fill_keys(array_keys($data), '');
                    } else {
                        $error = 'Data barang gagal disimpan.';
                    }
                } catch (Throwable $e) {
                    $error = 'Gagal menyimpan data. Periksa koneksi database dan struktur tabel.';
                }
            }
        }

        require __DIR__ . '/../views/barang/tambah.php';
    }
}
