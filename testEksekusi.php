<?php
require_once __DIR__ . '/getKoneksi.php';
$koneksi = getKoneksi();

// ini adalah string multiline php
$sql = <<<SQL
    INSERT INTO customers(id, name, email)
    VALUES ('eko','eko','hafidz@best.com');
SQL;
// eksekusi perintah sql yang tidak mengembalikan nilai
$koneksi->exec($sql);

$koneksi = null;
