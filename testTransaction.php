<?php
include_once __DIR__ . '/getKoneksi.php';
$koneksi = getKoneksi();

// menggunakan fitur transaksi agar perintah sql tidak langsung di kirim secara otomatis ke database
// untuk memulai transaksi dimulai dengan beginTransaction(),
// untuk commit() untuk mengirim perintah sql ke database
// rollback() untuk membatalkan perintah sql dikirim ke databse, 

$koneksi->beginTransaction();
$koneksi->exec("INSERT INTO comment(email, comment) VALUES('halo@mail.com','hallo')");

$koneksi->commit(); //menjalankan perintah sql-nya
// $koneksi->rollBack() // membatalkan perintah sql nya


$koneksi = null;
