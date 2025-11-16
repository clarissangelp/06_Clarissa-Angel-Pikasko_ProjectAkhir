<?php
// koneksi database
include 'koneksi.php';

// menangkap data id yang dikirim dari URL
$ID_Seni = $_GET['ID_Seni'];

// menghapus data dari database
mysqli_query($koneksi, "DELETE FROM dataseni WHERE ID_Seni='$ID_Seni'");

// mengalihkan halaman kembali ke showtabel.php
header("location:showtabel.php");
?>
