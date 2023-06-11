<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Geco Games | Contact Us</title>

  <link rel="stylesheet" href="../styles/contactus.css">
  <link rel="stylesheet" href="../styles/nav.css">

  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"> 

  <script src="../js/navbtn.js"></script>
</head>
<body>
<canvas id="stars" class="universe"></canvas>
<div class="contact-us-container">
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
<div class="contact-us">
  <header class="header">
    <h1>Contact Us</h1>
  </header>

  <div class="content">
    <div class="contact-form">
      <form id="contact-form">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" placeholder="Message" required></textarea>
        <button type="submit">Send Message</button>
      </form>
    </div>

    <div class="contact-info">
      <h2>Contact Information</h2>
      <a href="geco.main@gmail.com">Geco.main@gmail.com</a>
      <p>Phone: +260 097 8516926</p>
      <p>Adress: PLOT NO. 11839, OFF MUMBWA ROAD, LIGHT INDUSTRIAL AREAN</p>
      <p></p>
    </div>
  </div>
</div>
</div>
</body>
<script src="../js/universe.js"></script>
</html>
