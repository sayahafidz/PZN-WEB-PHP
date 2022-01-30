<?php
include_once __DIR__ . '/getKoneksi.php';
$koneksi = getKoneksi();

$user  = "hafidz";
$pass = "hafidz";


$sql = "INSERT INTO admin(username,password) VALUES(?,?)";

$prepareStatement = $koneksi->prepare($sql);
$prepareStatement->execute([$user, $pass]);

$koneksi = null;
