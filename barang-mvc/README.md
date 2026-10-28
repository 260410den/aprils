# Form Tambah Data Barang

Folder ini berisi form PHP untuk memasukkan barang ke tabel `barang` pada database `db_toko`.

## Pengaturan

1. Letakkan folder `barang-mvc` di dalam folder web server lokal, misalnya `htdocs` pada XAMPP.
2. Pastikan database `db_toko` dan tabel `barang` sudah ada.
3. Jika username atau password MySQL berbeda, ubah nilainya di `config/database.php`.
4. Buka `http://localhost/barang-mvc/` di browser.

Tabel yang dipakai harus memiliki kolom `id_barang` (auto increment), `kode_barang`, `nama_barang`, `kategori`, `harga`, dan `stok`, sesuai struktur pada gambar.
