<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $ID_Seni           = $_POST['ID_Seni'];
    $Jenis_Seni        = $_POST['Jenis_Seni'];
    $Judul_Seni        = $_POST['Judul_Seni'];
    $Nama_Seniman      = $_POST['Nama_Seniman'];
    $Tahun_Pembuatan   = $_POST['Tahun_Pembuatan'];
    $Durasi_Pembuatan  = $_POST['Durasi_Pembuatan'];

    $query = "INSERT INTO dataseni (ID_Seni, Jenis_Seni, Judul_Seni, Nama_Seniman, Tahun_Pembuatan, Durasi_Pembuatan)
              VALUES ('$ID_Seni', '$Jenis_Seni', '$Judul_Seni', '$Nama_Seniman', '$Tahun_Pembuatan', '$Durasi_Pembuatan')";

    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>
                alert('Data karya seni berhasil disimpan!');
                window.location = 'showtabel.php';
              </script>";
    } else {
        echo 'Gagal menambahkan data: ' . mysqli_error($koneksi);
    }

} else {
    echo "Akses tidak valid!";
}
?>
