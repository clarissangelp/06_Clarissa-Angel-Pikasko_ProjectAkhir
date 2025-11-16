<?php
include 'koneksi.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $fullname = $_POST['full_name'];
    $username = $_POST['username'];
    $age      = $_POST['age'];
    $email    = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO register (Full_Name, Username, Age, Email, Password)
              VALUES ('$fullname', '$username', '$age', '$email', '$password')";

    $result = mysqli_query($koneksi, $query);

    if($result){
        echo "<script>
                alert('Data user berhasil disimpan!');
                window.location='index.php';
              </script>";
    } else {
        echo "Gagal menambahkan data: " . mysqli_error($koneksi);
    }

} else {
    echo "Akses tidak valid!";
}
?>

