<?php
$koneksi = mysqli_connect("localhost", "root", "mysql", "projek");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
