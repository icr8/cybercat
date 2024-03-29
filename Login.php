<?php
  require 'config/constants.php';

  $username = $_SESSION['signin-data']['username'] ?? null;
    $password = $_SESSION['signin-data']['password']?? null;

    //delete signin data session
    unset($_SESSION['signin-data']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- css -->
  
    <link rel="stylesheet" href="style.css">

</head>
<body class="container" style="  background-image: linear-gradient(to right, rgba(255,0,0,0), rgb(221, 168, 168));
">
    <header class="header">
        <img class="logo" src="Pics\logo.png" alt="logo">
        <nav class="navbar">
            <ul class="nav_links">
                <li> <a href="index.php">Home </a></li>

                <li> <a href="Contacts.php">Contact</a></li>
                <li> <a href="AboutUs.php">About</a></li>
            </ul>
        </nav>
        <a class="cta" href="Sign up.php"><button>Register</button></a>
        <a class="cta" href="Login.php"><button>Login</button></a>
        <a class="cta" href="Stocks.xml"><button>Stocks</button></a>

    </header>


    

    <form action="<?= ROOT_URL ?>login-logic.php" enctype="multipart/form-data" id="form" style="align-items: center; text-align: center; margin-top: 200px;" method="POST">
    
    <!-- sucess and error message -->
    <?php if(isset($_SESSION['signup-success'])) : ?>
        <center><div class="alert_message success">
            <p>
                <?= $_SESSION['signup-success'];
                unset($_SESSION['signup-success']);
                ?>
            </p>

        </div></center>
      
        <?php elseif (isset($_SESSION['signin'])) : ?>
        <center><div class="alert_message error">
            <p>
                <?= $_SESSION['signin'];
                unset($_SESSION['signin']);
                ?>
            </p>

        </div></center>
        <?php endif ?>
    
        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="username" value="<?= $username ?>" style="padding: 5px; opacity: 0.6;">
        <div style="padding: 15px;">
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" value="<?= $password ?>" required style="padding: 5px; opacity: 0.6;">
        </div>
        <div class="remember">
          <button name="submit" type="submit" >Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
          &nbsp;&nbsp;
          <!-- <div class="container" style="background-color:#f1f1f1"> -->
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="">Forgot password</span>
        </div>
        </div>
      
            <div id="auth"></div>
        </div>
    </form>


    


    <section class="footer">

        <div class="box-container">

           

            <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fas fa-phone"></i> +233 550440050</a>
                <a href="#"><i class="fas fa-phone"></i> +233 000000000</a>
                <a href="#"><i class="fas fa-envelope"></i> cybercat@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i>Ghana - Kumasi</a>
            </div>

            <div class="box">
                <h3>Support</h3>
                <a href="#"><i class="fas fa-arrow-right"></i>support@cybercat.com.gh</a>
                <a href="#"><i class="fas fa-arrow-right"></i>Safety tips</a>
                <a href="#"><i class="fas fa-arrow-right"></i>Contact Us</a>
                <a href="#"><i class="fas fa-arrow-right"></i>FAQ</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>twitter</a>
                <a href="#"><i class="fab fa-instagram"></i>instagram</a>
                <a href="#"><i class="fab fa-pinterest"></i>pinterest</a>
            </div>

        </div>

        <div class="credit"> All &copy; copyrights are reserved by <span>Cybercat</span> </div>

    </section>
</body>
</html>