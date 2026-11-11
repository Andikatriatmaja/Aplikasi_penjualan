<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'aplikasi_penjualan';

$koneksi = new mysqli($host, $user, $pass, $db);

if ($koneksi->connect_error) {
    die('Koneksi database gagal: ' . $koneksi->connect_error);
}
?>