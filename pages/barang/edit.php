<?php
require 'koneksi.php';
$id = $_GET['id'] ?? null;

$stmt = $pdo->prepare("SELECT * FROM barang WHERE id = ?");
$stmt->execute([$id]);
$barang = $stmt->fetch();

if (!$barang) {
    die("Data tidak ditemukan");
}

$kategoriStmt = $pdo->query("SELECT * FROM kategori");
?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Barang</h1>
</div>

<?php if (isset($_GET['error'])): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error:</strong> <?= htmlspecialchars($_GET['error']); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Form Edit Barang</h6>
    </div>
    <div class="card-body">
        <form action="?page=barangeditproses" method="POST">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="id" value="<?= $barang['id']; ?>">

            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= htmlspecialchars($barang['nama_barang']); ?>" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" value="<?= $barang['harga']; ?>" required>
            </div>
            <div class="form-group">
                <label for="kategori_id">Kategori</label>
                <select class="form-control" name="kategori_id" id="kategori_id" required>
                    <option value="">Pilih Kategori</option>
                    <?php while ($row = $kategoriStmt->fetch()): ?>
                        <option value="<?= $row['id']; ?>" <?= $row['id'] == $barang['kategori_id'] ? 'selected' : ''; ?>>
                            <?= htmlspecialchars($row['nama_kategori']); ?>
                        </option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">
                    <i class="fas fa-save"></i> Update Data
                </button>
                <a href="?page=barang" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>
        </form>
    </div>
</div>
