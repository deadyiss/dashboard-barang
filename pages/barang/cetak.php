<?php
require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../koneksi.php';
date_default_timezone_set('Asia/Makassar');

use Spipu\Html2Pdf\Html2Pdf;

// 1. ambil data dari database
$stmt = $pdo->query("SELECT barang.*, kategori.nama_kategori
                        FROM barang
                        JOIN kategori ON barang.kategori_id = kategori.id");
$data = $stmt->fetchAll();

// 2.Mulai menangkap output HTML
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Inventaris Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .table {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .table th {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 12px;
        }
        .table td {
            padding: 12px;
            border: none;
        }
        .table tbody tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        .table tbody tr:hover {
            background-color: #e9ecef;
        }
        .harga {
            text-align: right;
            font-weight: bold;
        }
        .stok {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2 class="mb-3">Laporan Inventaris Barang</h2>
            
            <p class="text-muted">Tanggal Cetak: <?= date('d-m-Y') ?></p>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stok</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach ($data as $row): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= htmlspecialchars($row['nama_barang']) ?></td>
                        <td><?= htmlspecialchars($row['nama_kategori']) ?></td>
                        <td class="harga">Rp <?= number_format($row['harga'], 0, ',', '.') ?></td>
                        <td class="stok"><?= $row['stok'] ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

<?php
$html = ob_get_clean();

try {
    $html2pdf = new Html2Pdf('P', 'A4', 'en');
    $html2pdf->writeHTML($html);
    $html2pdf->output('laporan_barang.pdf', 'I');
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}