<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data User</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>

<div class="judul">
    <h3>FORM TAMBAH USER</h3>
    <br>

    <form method="POST" action="tambah_aksi.php">
        <table>

            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="full_name" required></td>
            </tr>

            <tr>
                <td>Username</td>
                <td><input type="text" name="username" required></td>
            </tr>

            <tr>
                <td>Umur</td>
                <td><input type="number" name="age" required></td>
            </tr>

            <tr>
                <td>Email</td>
                <td><input type="email" name="email" required></td>
            </tr>

            <tr>
                <td>Password</td>
                <td><input type="password" name="password" required></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>

        </table>
    </form>
</div>

</body>
</html>
