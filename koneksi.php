<?php

$host = "127.0.0.1";
$db = "db_praktikum_php";
$user = "webuser";
$pass = "web123";
$charset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];  

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    //echo "Koneksi berhasil!"; // Gunakan hanya untuk testing
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());   
}

?>