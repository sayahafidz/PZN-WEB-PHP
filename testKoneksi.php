<?php
$host = 'localhost';
$port = 3306;
$database = 'php_mysqlf';
$username = 'root';
$password = 'root';

try {
    $koneksi = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    echo "Sukses terkoneksi ke database";

    // jangan pernah lupa menutup koneksi
    // menutuk koneksi pdo
    $koneksi = null;
} catch (PDOException $exception) {
    echo "gagal terkoneksi ke database : " . $exception->getMessage() . PHP_EOL;
}
