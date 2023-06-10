<?php
    require '../config/login.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Geco Games | Login</title>

  <link rel="stylesheet" href="../styles/login.css">
  <link rel="stylesheet" href="../styles/nav.css">

  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"> 

  <script src="../js/navbtn.js"></script>
</head>
<body>
<canvas id="stars" class="universe"></canvas>
<div class="login-container">
<div class="nav-bar">
        <div class="content">
            <ul>
                <div class="img-container">
                    <li>
                        <a href="../index.html"><img src="../assets/icons/white-icon-geco.png" alt=""></a>
                    </li>
                </div>
                <div class="text-items"  id="text-content">
                    <li>
                        <a href="../pages/games.html">Games</a>
                    </li>
                    <li>
                        <a href="../pages/community.html">Community</a>
                    </li>
                    <li>
                        <a href="../pages/support.html">Support</a>
                    </li>
                    <li>
                        <a href="../pages/developers.html">Developers</a>
                    </li>
                    <li>
                        <a href="../pages/contactus.html">Contact us</a>
                    </li>
                    <li>
                        <a href="../pages/team.html">Our Team</a>
                    </li>
                    <li>
                        <a href="../pages/login.html">Log in</a>
                    </li>
                    <li>
                        <a href="../pages/signin.html">Sign in</a>
                    </li>
                    <li>
                        <span class="close" onclick="CloseNav()"><i class="fa-solid fa-xmark"></i></span>
                        
                    </li>
                </div>
                <li>
                    <a href="javascript:void(0);" class="open"  onclick="OpenNav()"><i class="fa-solid fa-bars fa-lg"></i></a>
                </li>
            </ul>
        </div>
    </div>
  <div class="login-box">
    <h2>Login</h2>
    <form method="post" action="">
      <div class="user-box">
        <input type="text" name="username" id="username" required="">
        <label>Username</label>
      </div>
      <div class="user-box">
        <input type="password" name="password" id="password" required="">
        <label>Password</label>
      </div>
      <input class="login" type="submit" value="Login">
    </form>
    <br>
    <span class="text">Don't Have an Account ?<a href="">Sign up</a></span>
  </div>
</div>
</body>
<script src="../js/universe.js"></script>
<script src="../js/linear.js"></script>
</html>


