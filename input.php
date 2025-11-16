<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Karya Seni</title>
    <link rel="stylesheet" href="input.css">
</head>

<body>
<div class="wrapper">

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

  
    <div class="container">
        <h2>Art Gallery Database</h2>
        <h3>Tambah Data Karya Seni</h3>

        <form method="POST" action="tambahaksiinput.php">
            <table>
                <tr>
                    <td>ID Seni</td>
                    <td><input type="text" name="ID_Seni" required></td>
                </tr>
                <tr>
                    <td>Jenis Seni</td>
                    <td><input type="text" name="Jenis_Seni" required></td>
                </tr>
                <tr>
                    <td>Judul Seni</td>
                    <td><input type="text" name="Judul_Seni" required></td>
                </tr>
                <tr>
                    <td>Nama Seniman</td>
                    <td><input type="text" name="Nama_Seniman" required></td>
                </tr>
                <tr>
                    <td>Tahun Pembuatan</td>
                    <td><input type="number" name="Tahun_Pembuatan" required></td>
                </tr>
                <tr>
                    <td>Durasi Pembuatan</td>
                    <td><input type="text" name="Durasi_Pembuatan"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" class="btn">Simpan</button></td>
                </tr>
            </table>
        </form>
    </div>

    <footer>
        Clarissa Angel Pikasko 2025
    </footer>

</div>
</body>
</html>
