<?php
require 'koneksi.php';

// Menyiapkan query
$stmt = $pdo->query("SELECT barang.*, kategori.nama_kategori
                     FROM barang
                     JOIN kategori ON barang.kategori_id = kategori.id");
?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Barang Toko</h1>
</div>

<?php if (isset($_GET['pesan'])): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data telah <strong><?= htmlspecialchars($_GET['pesan']); ?></strong>!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Barang</h6>
    </div>
    <div class="card-body">
        <div class="mb-3">
            <a href="/?page=barangtambah" class="btn btn-primary">
                <i class="fas fa-plus"></i> Tambah Barang
            </a>
            <a href="/pages/barang/cetak.php" target="_blank" class="btn btn-success">
                <i class="fas fa-print"></i> Cetak PDF
            </a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Status Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no = 1; while ($row = $stmt->fetch()): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= htmlspecialchars($row['nama_barang']) ?></td>
                        <td><?= $row['nama_kategori']; ?></td>
                        <td>Rp <?= number_format($row['harga'], 0, ',', '.') ?></td>
                        <td><?= $row['stok'] ?></td>
                        <td>
                            <?php if ($row['stok'] < 5): ?>
                                <span style="color: red;">Hampir Habis</span>
                            <?php else: ?>
                                <span style="color: green;">Tersedia</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="/?page=barangedit&id=<?= $row['id'] ?>" class="btn btn-warning btn-sm" title="Edit">
                                <img src="images/edit.png" alt="Edit" width="16" height="16">
                            </a>
                            <form action="proses_hapus.php" method="POST" style="display:inline" onsubmit="return confirm('Yakin hapus data?')">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                <button type="submit" class="btn btn-danger btn-sm" title="Hapus">
                                    <img src="images/delete.png" alt="Hapus" width="16" height="16">
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
