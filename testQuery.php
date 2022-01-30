<?php
require_once __DIR__ . "/getKoneksi.php";

$koneksi = getKoneksi();

// contoh perintah sql yang mengembalikan nilai
$sql = "SELECT id,name,email FROM customers";
$statement = $koneksi->query($sql);

// cara menampilkannya
foreach ($statement as $row) {
    $id = $row["id"];
    $name = $row["name"];
    $email = $row["email"];

    echo "Id = $id" . PHP_EOL;
    echo "Name = $name" . PHP_EOL;
    echo "Email = $email" . PHP_EOL;
}

$koneksi = null;
