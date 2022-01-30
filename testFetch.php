<?php
include_once __DIR__ . '/getKoneksi.php';
$koneksi = getKoneksi();

$user  = "hafidz";
$pass = "hafidz";
$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";

$statement = $koneksi->prepare($sql);
$statement->execute([$user, $pass]);


// fetch() digunakan untuk menarik satu data dari hasil query, ketika memanggil fungsi fetch() lagi maka akan menarik data selanjutnya
if ($row = $statement->fetch()) {
    echo "sukses login : " . $row["username"] . PHP_EOL;
} else {
    echo "gagal login " . PHP_EOL;
}

$koneksi = null;
