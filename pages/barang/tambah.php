<?php
require 'koneksi.php';
$stmt = $pdo->query("SELECT * FROM kategori");
?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Barang</h1>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Form Tambah Barang</h6>
    </div>
    <div class="card-body">
        <form action="/?page=barangtambahproses" method="POST">
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" required>
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="number" class="form-control" id="stok" name="stok" required>
            </div>
            <div class="form-group">
                <label for="kategori_id">Kategori</label>
                <select class="form-control" name="kategori_id" id="kategori_id" required>
                    <option value="">Pilih Kategori</option>
                    <?php while ($row = $stmt->fetch()): ?>
                        <option value="<?= $row['id'] ?>"><?= htmlspecialchars($row['nama_kategori']) ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Simpan Data
                </button>
                <a href="/?page=barang" class="btn btn-secondary ml-2">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>
        </form>
    </div>
</div>
