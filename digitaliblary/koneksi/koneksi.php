<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "digitaliblary";


$koneksi = mysqli_connect($host, $user, $pass, $db);


if (!$koneksi) {
    die ("Koneksi Gagal : " . mysqli_connect());
}

echo "Koneksi Berhasil";
?>