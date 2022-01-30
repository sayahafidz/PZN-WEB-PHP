<?php
require_once __DIR__ . '/getKoneksi.php';
$koneksi = getKoneksi();

// salah satu cara menghandle sql injection tapi tidak direkomendasikan
$username = $koneksi->quote("admin'; #"); //sql injection
$password = $koneksi->quote("admin");

$sql = "SELECT * FROM admin WHERE username = $username AND password = $password;";
// function query() dan function execute() tidak bisa menangani sql injection


$statement = $koneksi->query($sql);

$sukses = false;
$find_user = null;
foreach ($statement as $row) {
    // jika sukses
    $sukses  = true;
    $find_user = $row['username'];
}

if ($sukses) {
    echo "Sukses Login : " . $find_user . PHP_EOL;
} else {
    echo "Gagal Login."  . PHP_EOL;
}

$koneksi = null;
