


<?php
include 'koneksi.php';

if(isset($_POST['register'])){
    $nama     = $_POST['full_name'];
    $username = $_POST['username'];
    $age      = $_POST['age'];
    $email    = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO register (Full_Name, Username, Age, Email, Password) 
              VALUES ('$nama','$username','$age','$email','$password')";
    $result = mysqli_query($koneksi, $query);

    if($result){
        echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location='login.php';</script>";
    } else {
        echo "Gagal mendaftar!";
    }
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>

<nav>
        <div class="logo">
            <img src="logoseni.png" alt="Logo" class="logo-img" height="50px" width="50px">
            <div class="logo-text">Gallery of Art</div>
        </div>

        <div class="nav-links">
            <a href="#">Landing Page</a>
            <a href="aboutus.html">About Us</a>
            <a href="login.html">Login</a>
        </div>
    </nav>

<div class="container">

    
    <div class="left">
        <div class="text-box">
            <h1>Join the Gallery of Art </h1>
            <p>Discover, explore, and share unique artworks.  
            Create your free account and get started!</p>
        </div>
    </div>

   

    <br>
    <br>
    <br>
    <div class="right">
        <h2>Create Account</h2>
        <p>Already have an account? <a href="login.php">Login here</a></p>

        <form method="POST">

            <label>Nama Lengkap</label>
            <input type="text" name="full_name" placeholder="Nama lengkap" required>

            <label>Username</label>
            <input type="text" name="username" placeholder="Username" required>

            <label>Umur</label>
            <input type="number" name="age" placeholder="Umur" required>

            <label>Email</label>
            <input type="email" name="email" placeholder="example@mail.com" required>

            <label>Password</label>
            <input type="password" name="password" placeholder="Password" required>

            <button type="submit" name="register">Register</button>
            

            
        </form>

    </div>

</div>

</body>
</html>
