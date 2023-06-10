<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Geco Games | Support Page</title>

  <link rel="stylesheet" href="../styles/support.css">
  <link rel="stylesheet" href="../styles/nav.css">

  <script src="https://kit.fontawesome.com/3a3f083ec4.js" crossorigin="anonymous"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

  <script src="../js/search.js"></script>
  <script src="../js/navbtn.js"></script>
</head>
<body>
<canvas id="stars" class="universe"></canvas>
<div class="support-container">
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
  <header>
    <h1>Support Page</h1>
  </header>
  
  <div class="search-container">
    <input type="text" id="search-input" placeholder="Search for a question or problem...">
    <input type="submit" value="Search" onclick="search()">
  </div>
  
  <section>
    <h2>Frequently Asked Questions</h2>
    <div id="search-results"></div>
    <p>If you couldn't find the answer to your question, please feel free to contact us for further assistance.</p>
    <p>You can reach us through the email geco.main@gmail.com <br> Or You can call us on +260 978 516926</p>
    <p>Our support team is available 24/7 to help you with any issues or inquiries you may have. Whether it's troubleshooting technical problems, providing game recommendations, or answering general gaming questions, we are here to assist you.</p>
    <p>Additionally, you can visit our facebook, Instagram or Tic tok with page with the username @geco.games to find answers to commonly asked questions. Our FAQ section covers various topics, including account management, gameplay instructions, and troubleshooting steps for common game-related issues.</p>
    <p>For a more personalized support experience, please provide us with detailed information about your question or problem when contacting us. This will help us better understand your needs and provide you with the most effective assistance.</p>
    <p>Thank you for choosing our gaming support services. We strive to deliver the best support experience and ensure your gaming journey is enjoyable and hassle-free.</p>
  </section>
  
  <div class="support-card">
    <img src="../assets/support/support-01.png" alt="Support Image 1" style="max-width: 500px;">
    <p>Game with confidence, knowing that our support is your ultimate ally in the quest for gaming greatness.</p>
  </div>
  
  <div class="support-card">
    <p>Experience gaming support at its finest, where we're committed to turning your gaming dreams into reality.</p>
    <img src="../assets/support/support-02.png" alt="Support Image 2" style="max-width: 500px;">
  </div> 
</div>
</body>
<script src="../js/universe.js"></script>
</html>
