<?php
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['_method'] === 'PUT') {
    $id = $_POST['id'];
    $nama = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $kategori = $_POST['kategori_id'];

    if ($harga < 0) {
        echo '<meta http-equiv="refresh" content="0;url=/?page=barangedit&id=' . $id . '&error=harga_tidak_boleh_negatif">';
        exit();
    }

    // Menggunakan prepared statement untuk mencegah SQL Injection
    $sql = "UPDATE barang SET nama_barang = ?, harga = ?, kategori_id = ? WHERE id = ?";
    $pdo->prepare($sql)->execute([$nama, $harga, $kategori, $id]);

    echo '<meta http-equiv="refresh" content="0;url=/?page=barang&pesan=berhasil_update">';
    exit();
}