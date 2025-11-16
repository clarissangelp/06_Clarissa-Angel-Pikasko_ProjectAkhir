<!DOCTYPE html>
<html>
<head>
    <title>CRUD DATA KARYA SENI</title>
    <link rel="stylesheet" href="update.css" />
</head>
<body>
    
    <h2>CRUD DATA KARYA SENI - ART GALLERY DATABASE</h2>
    <h3>EDIT DATA KARYA SENI</h3>

    <?php
    include 'koneksi.php';
    $ID_Seni = $_GET['ID_Seni'];
    $data = mysqli_query($koneksi, "SELECT * FROM dataseni WHERE ID_Seni='$ID_Seni'");
    while($d = mysqli_fetch_array($data)){
    ?>
        <form method="post" action="ubah.php">
            <table>
                <tr>
                    <td>ID Seni</td>
                    <td>
                        <input type="hidden" name="ID_Seni" value="<?php echo $d['ID_Seni']; ?>">
                        <input type="text" value="<?php echo $d['ID_Seni']; ?>" disabled>
                    </td>
                </tr>
                <tr>
                    <td>Jenis Seni</td>
                    <td><input type="text" name="Jenis_Seni" value="<?php echo $d['Jenis_Seni']; ?>"></td>
                </tr>
                <tr>
                    <td>Judul Seni</td>
                    <td><input type="text" name="Judul_Seni" value="<?php echo $d['Judul_Seni']; ?>"></td>
                </tr>
                <tr>
                    <td>Nama Seniman</td>
                    <td><input type="text" name="Nama_Seniman" value="<?php echo $d['Nama_Seniman']; ?>"></td>
                </tr>
                <tr>
                    <td>Tahun Pembuatan</td>
                    <td><input type="number" name="Tahun_Pembuatan" value="<?php echo $d['Tahun_Pembuatan']; ?>"></td>
                </tr>
                <tr>
                    <td>Durasi Pembuatan</td>
                    <td><input type="text" name="Durasi_Pembuatan" value="<?php echo $d['Durasi_Pembuatan']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="button-group">
                        <input type="submit" value="SIMPAN">
                        <a href="showtabel.php" class="btn-back">KEMBALI</a>
                    </td>
                </tr>
            </table>
        </form>
    <?php 
    }
    ?>
</body>
</html>
