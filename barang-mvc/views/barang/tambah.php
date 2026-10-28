<?php
function h(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <main class="container py-5" style="max-width: 640px;">
        <section class="card border-0 shadow-sm">
            <div class="card-body p-4">
                <h1 class="h3">Form Tambah Data Barang</h1>
                <p class="text-secondary">Isi detail barang, lalu tekan Simpan.</p>
                <hr>

                <?php if ($pesan !== ''): ?>
                    <div class="alert alert-success" role="alert"><?= h($pesan) ?></div>
                <?php endif; ?>
                <?php if ($error !== ''): ?>
                    <div class="alert alert-danger" role="alert"><?= h($error) ?></div>
                <?php endif; ?>

                <form action="" method="post">
                    <div class="mb-3">
                        <label for="kode_barang" class="form-label">Kode Barang</label>
                        <input id="kode_barang" name="kode_barang" class="form-control" maxlength="20" required value="<?= h($data['kode_barang']) ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nama_barang" class="form-label">Nama Barang</label>
                        <input id="nama_barang" name="nama_barang" class="form-control" maxlength="100" required value="<?= h($data['nama_barang']) ?>">
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <input id="kategori" name="kategori" class="form-control" maxlength="50" required value="<?= h($data['kategori']) ?>">
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input id="harga" name="harga" type="number" class="form-control" min="0" step="0.01" required value="<?= h($data['harga']) ?>">
                    </div>
                    <div class="mb-4">
                        <label for="stok" class="form-label">Stok</label>
                        <input id="stok" name="stok" type="number" class="form-control" min="0" step="1" required value="<?= h($data['stok']) ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </section>
    </main>
</body>
</html>
