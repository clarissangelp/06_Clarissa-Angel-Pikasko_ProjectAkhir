<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gallery Login</title>
    <link rel="stylesheet" href="login.css"/>
</head>
<body>


<nav>
    <div class="logo">
        <img src="logoseni.png" alt="Logo" class="logo-img" height="50px" width="50px">
        <div class="logo-text">Gallery of Art</div>
    </div>

    <div class="nav-links">
        <a href="landingpage.html">Landing Page</a>
        <a href="aboutus.html">About Us</a>
        <a href="login.php">Login</a>
    </div>
</nav>


<div class="container">

 
    <div class="left">
        <div class="overlay"></div>
        <div class="content">
            <h1>Welcome to Gallery of Art🎨</h1>
            <p>Where creativity lives in every corner.  
            Explore, collect, and share meaningful artworks.</p>
        </div>
    </div>


    <div class="right">
        <div class="form-box">
            <h2>Login to Continue</h2>
            <p class="small-text">Don't have an account? <a href="register.php">Create one</a></p>

            <form method="POST" action="proses_login.php">

                <label>Email Address</label>
                <input type="email" name="email" placeholder="example@mail.com" required>

                <label>Password</label>
                <input type="password" name="password" placeholder="Your password" required>

                <button type="submit" class="btn-login">Login</button>

                <button type="button" class="btn-google">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg" alt="">
                    Login with Google
                </button>

                <p class="forgot"><a href="#">Forgot password?</a></p>
            </form>
        </div>
    </div>

</div>



</body>
</html>
