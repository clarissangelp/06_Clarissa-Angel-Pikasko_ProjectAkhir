<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form
$ID_Seni          = $_POST['ID_Seni'];
$Jenis_Seni       = $_POST['Jenis_Seni'];
$Judul_Seni       = $_POST['Judul_Seni'];
$Nama_Seniman     = $_POST['Nama_Seniman'];
$Tahun_Pembuatan  = $_POST['Tahun_Pembuatan'];
$Durasi_Pembuatan = $_POST['Durasi_Pembuatan'];

// update data ke database
mysqli_query($koneksi, "UPDATE dataseni SET 
    Jenis_Seni='$Jenis_Seni',
    Judul_Seni='$Judul_Seni',
    Nama_Seniman='$Nama_Seniman',
    Tahun_Pembuatan='$Tahun_Pembuatan',
    Durasi_Pembuatan='$Durasi_Pembuatan'
    WHERE ID_Seni='$ID_Seni'");

// mengalihkan halaman kembali ke showtabel.php
header("location:showtabel.php");
?>
