<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Developers Page</title>

  <link rel="stylesheet" href="../styles/developer.css">
  <link rel="stylesheet" href="../styles/nav.css">

  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

  <script src="../js/navbtn.js"></script>
</head>
<body>
<canvas id="stars" class="universe"></canvas>
<div class="developer-container">
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
<div class="developers-page">
  <header class="header">
    <h1>Developers Page</h1>
  </header>

  <div class="content">
    <div class="section">
      <h2>Welcome to the Developers Hub</h2>
      <div class="image-container">
        <img src="../assets/developer/developer-2.png" alt="Welcome Image" style="max-width: 3000px;">
      </div>
      <p>Join our vibrant community of developers and unleash the power of gaming innovation. Discover resources, tools, and support to bring your gaming ideas to life.</p>
      <a href="#" class="cta-button">Get Started</a>
    </div>

    <div class="section">
      <h2>Resources for Developers</h2>
      <div class="image-container">
        <img src="../assets/developer/developer-1.png" alt="Resources Image">
      </div>
      <p>Explore our comprehensive collection of developer resources, including documentation, APIs, SDKs, and sample code to help you build and optimize your gaming experiences.</p>
      <a href="#" class="cta-button">View Resources</a>
    </div>

    <div class="section">
      <h2>Support and Community</h2>
      <div class="image-container">
        <img src="/assets/slides/Games-.jpg" alt="Support Image">
      </div>
      <p>Connect with fellow developers, ask questions, and get assistance from our dedicated support team. Join the vibrant community and collaborate to enhance your gaming creations.</p>
      <a href="#" class="cta-button">Join Community</a>
    </div>
  </div>
</div>
</div>
</body>
<script src="../js/universe.js"></script>
</html>
