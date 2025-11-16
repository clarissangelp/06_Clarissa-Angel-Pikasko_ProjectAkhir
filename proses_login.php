

<?php
include 'koneksi.php';


$email = $_POST['email'];
$password = $_POST['password'];


$query = "SELECT * FROM register WHERE Email='$email'";
$result = mysqli_query($koneksi, $query);
$user = mysqli_fetch_assoc($result);

if ($user) {

    if (password_verify($password, $user['Password'])) {
       
        session_start();
        $_SESSION['email'] = $user['Email'];
        $_SESSION['status'] = "login";

        echo "<script>
                alert('Login berhasil!');
                window.location='input.php';
              </script>";
    } else {
        
        echo "<script>
                alert('Password salah!');
                window.location='login.php';
              </script>";
    }
} else {
    
    echo "<script>
            alert('Email tidak ditemukan!');
            window.location='login.php';
          </script>";
}
?>
