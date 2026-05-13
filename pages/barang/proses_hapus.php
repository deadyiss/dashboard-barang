<?php
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['_method']=== 'DELETE') {
    $id = $_POST['id'];

    // Menggunakan prepared statement untuk mencegah SQL Injection
    $sql = "DELETE FROM barang WHERE id = :id";
    $pdo->prepare($sql)->execute([$id]);

    // Redirect ke halaman daftar barang setelah berhasil menghapus data
    header("Location: /?page=barang&pesan=berhasil_hapus");
    exit();
}