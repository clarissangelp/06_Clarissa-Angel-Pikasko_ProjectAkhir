<?php
include 'koneksi.php';
$data = mysqli_query($koneksi, "SELECT * FROM dataseni");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karya Seni</title>
    <link href="showtabel.css" rel="stylesheet">
</head>

<body>
<div class="wrapper">

    <!-- NAVBAR -->
    <nav>
        <div class="logo">
            <img src="logoseni.png" alt="Logo" class="logo-img">
            <div class="logo-text">Gallery of Art</div>
        </div>

        <div class="nav-links">
            <a href="input.php">Input Data</a>
            <a href="showtabel.php">Show Data</a>
            <a href="landingpage.html">Log Out</a>
        </div>
    </nav>

 
    <main class="content">
        <h2>DATA KARYA SENI — ART GALLERY DATABASE</h2>

        <div class="btn-box">
            <a href="input.php" class="add-btn">+ TAMBAHKAN DATA BARU</a>
        </div>

        <table>
            <tr>
                <th>No</th>
                <th>ID Seni</th>
                <th>Jenis Seni</th>
                <th>Judul Seni</th>
                <th>Nama Seniman</th>
                <th>Tahun Pembuatan</th>
                <th>Durasi Pembuatan</th>
                <th>Opsi</th>
            </tr>

            <?php
            $no = 1;
            while ($d = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $d['ID_Seni']; ?></td>
                <td><?= $d['Jenis_Seni']; ?></td>
                <td><?= $d['Judul_Seni']; ?></td>
                <td><?= $d['Nama_Seniman']; ?></td>
                <td><?= $d['Tahun_Pembuatan']; ?></td>
                <td><?= $d['Durasi_Pembuatan']; ?></td>

                <td>
                    <a class="edit" href="update.php?ID_Seni=<?= $d['ID_Seni']; ?>">EDIT</a> |
                    <a class="hapus" href="delete.php?ID_Seni=<?= $d['ID_Seni']; ?>" 
                       onclick="return confirm('Yakin ingin menghapus data ini?')">HAPUS</a>
                </td>
            </tr>
            <?php } ?>
        </table>

    </main>

    
    <footer>
        Clarissa Angel Pikasko 2025
    </footer>

</div>
</body>
</html>
