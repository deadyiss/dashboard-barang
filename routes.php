<?php

$page = $_GET['page'] ?? 'dashboard';

switch ($page) {
    case '':
    case 'dashboard':
        include "pages/kategori/dashboard.php";
        break;
    case 'barang':
        include "pages/barang/index.php";
        break;
    case 'barangtambah':
        include "pages/barang/tambah.php";
        break;
    case 'barangedit':
        include "pages/barang/edit.php";
        break;
    case 'barangtambahproses':
        include "pages/barang/proses_tambah.php";
        break;
    case 'barangeditproses':
        include "pages/barang/proses_edit.php";
        break;
    case 'login':
        include "pages/login.php";
        break;
    case '404':
        include "pages/404.php";
        break;
    default:
        include "pages/404.php";
}
