<?php
function getKoneksi(): PDO
{
    $host = 'localhost';
    $port = 3306;
    $database = 'php_mysql';
    $username = 'root';
    $password = 'root';

    $koneksi = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    return $koneksi;
}
