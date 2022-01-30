<?php
include_once __DIR__ . '/getKoneksi.php';
$koneksi = getKoneksi();

// melihat id terahir yang ada didalam database;

$koneksi->exec("INSERT INTO comment(email,comment) VALUES('ihsan@gmail.com','hi')");
$id = $koneksi->lastInsertId();

echo $id . PHP_EOL;

$koneksi = null;
