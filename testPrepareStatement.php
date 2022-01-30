<?php
include_once __DIR__ . '/getKoneksi.php';
$koneksi = getKoneksi();

$user  = "admin";
$pass = "admin";


// contoh prepare statement
// titik dua (:) menandakan bahwa itu adalah parameter yang akan di inject dari luar
// $sql = "SELECT * FROM admin WHERE username = :param1 AND password = :param2";

// cara lain untuk menandakan parameternya dengan menggunakan ?
$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";

$prepareStatement = $koneksi->prepare($sql);

// binding parameter, setelah melakukan prepare statement sql lakukan bindind ke parameter yang akan di inject
// $prepareStatement->bindParam("param1", $user);
// $prepareStatement->bindParam("param2", $pass);

// binding param dengan menggunakan index
// $prepareStatement->bindParam(1, $user);
// $prepareStatement->bindParam(2, $pass);


// jika sudah maka lakukan execute untuk menjalankan sql nya
// contoh lainnya binding param dapat dimasukkan ketika melakukan execute dengan memasukkan array sbg berikt
$prepareStatement->execute([$user, $pass]);


$sukses = false;
$find_user = null;
foreach ($prepareStatement as $row) {
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
