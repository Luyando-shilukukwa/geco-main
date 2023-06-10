<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Geco Games Studios</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/nav.css">

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Righteous&display=swap" rel="stylesheet">

    <script src="./js/navbtn.js"></script>
    
</head>
<body>
<canvas id="stars" class="universe"></canvas>
<div class="home-container">
    <div>
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
        <!-----------------------------Slide-Show----------------------------------------------------------->
        <div class="slide-show">
                <div class="container">
                    <div class="my-slide fade">
                        <img src="./assets/slides/slide-1.png" alt="Slide-One">
                        <div class="caption-text">
                            <h2>Welcome To Geco Games Studios</h2>
                            <h4>Home Of The African Mind</h4>
                        </div>
                    </div>
                    <div class="my-slide fade">
                        <img src="./assets/slides/slide-2.png" alt="Slide-Two">
                        <div class="caption-text">
                            <h2>Geco Games Has</h2>
                            <h4>Teams Of Ambitious Individuals</h4>
                        </div>
                    </div>
                    <div class="my-slide fade">
                        <img src="./assets/slides/slide-3.png" alt="Slide-Three">
                        <div class="caption-text">
                            <h2>We Aim To Have</h2>
                            <h2><b>Motivation OF Our People</b></h2>
                        </div>
                    </div>
                    <div class="check">
                        <a class="prev" onclick="plusSlide(-1)"><i class="fa-solid fa-circle-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="popular-games">
                <div class="heading-text">
                    <h2>
                        Our Popular Games
                    </h2>
                </div>
                <div class="games">
                    <div class="card">
                        <img src="./assets/popular/ourlastprayer.png" alt="our-last-prayer-arena">
                        <h4><a href="https://play.google.com/store/apps/details?id=com.GECOGamesLLC.OurLastPrayer">Our Last Prayer : Arena</a></h4>
                    </div>
                    <div class="card">
                        <img src="./assets/popular/letterloop.png" alt="letter-loop-world-tour">
                        <h4><a href="https://play.google.com/store/apps/details?id=com.GecoGames.LetterLoopWorldTour">Letter Loop : World Tour</a></h4>
                    </div>
                    <div class="card">
                        <img src="./assets/popular/inshimu.png" alt="inshimu-2">
                        <h4><a href="#">Inshimu 2</a></h4>
                    </div>
                </div>
            </div>
            <!----------------------Square--------------------------------------------------->
            <div class="square">
                <div class="title">
                    <h2>Our Universe's | Innovation</h2>
                </div>
                <div class="content">
                    <div class="main-content">
                        <img src="./assets/popular/future.png" alt="Future">
                        <div class="banner">
                            <h3><b>We Bring The African Tradition To You.</b></h3>
                            <a href=""><b>Explore</b></a>
                        </div>
                    </div>
                    <div class="side-content">
                        <div class="top">
                            <div class="card">
                                <div class="cover"></div>
                                <img src="./assets/popular/chel.png" alt="Place-Holder">
                                <div class="text"><h4>Our Motivation</h4></div>
                            </div>
                            <div class="card">
                                <div class="cover"></div>
                                <img src="./assets/popular/redspy.png" alt="Place-Holder">
                                <div class="text"><h4>Bring Our Ideas To Reality</h4></div>
                            </div>
                            <div class="card">
                                <div class="cover"></div>
                                <img src="./assets/popular/magic.png" alt="Creativity">
                                <div class="text"><h4>Having The African Set up</h4></div>
                            </div>
                            <div class="card">
                                <div class="cover"></div>
                                <img src="./assets/popular/thinking.png" alt="Imagination">
                                <div class="text"><h4>Thinking Outside The Box</h4></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="adventure">
                <div class="text"><h2>Our Culture</h2></div>
                <div class="content">
                    <div class="single-card-text">
                        <div class="card">
                            <h2>
                                Discover The African Artistic Culture
                            </h2>
                            <p>"Mukelabai Muhongo is a zambian character that features in the Game, The Collapse of Zero he plays as the main character, this is an artist illustration of the character."</p>
                        </div>
                    </div>
                <div class="side">
                    <div class="single-card">
                        <div class="card">
                            <div class="cover"></div>
                            <img src="./assets/adventures/art.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!--------------------------Ambassador------------------------------------->
            <div class="ambassador">
                <div class="title">
                    <h2>Who Are We</h2>
                </div>
                <div class="content">
                    <div class="card">
                        <img src="./assets/ambassadors/geco.png" alt="Ambassador-Item-One">
                    </div>
                    <div class="card">
                        <img src="./assets/ambassadors/games.png" alt="Ambassador-Item-Two">
                    </div>
                    <div class="card">
                        <img src="./assets/ambassadors/studios.png" alt="Ambassador-Item-Three">
                    </div>
                </div>
            </div>
            <!--------------------Count---------------------------------->
            <div class="count-down">
                <h2>What's Next</h2>
                <div class="container">
                    <div class="image">
                        <img src="./assets/clock/inshimu.png" alt="Inshimu-two">
                    </div>
                    <div class="clock">
                        <div class="time">
                            <h2>Coming Soon</h2>
                            <h2><span>Play Store</span> | <span>App Store</span></h2>
                            <div class="stamp">
                                <h2>14</h2><h2>June</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-----------------------Footer----------------------------------->
        <footer>
            <div class="container">
                <div class="columns">
                    <div class="col">
                        <div class="geco">
                            <h3>Geco Games Studios</h3>
                            <div class="address">
                                <ul>
                                    <li>10101,</li>
                                    <li>Lusaka,</li>
                                    <li>Zambia.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="developer-community">
                            <h4>Developer Community</h3>
                                <ul>
                                    <li>
                                        <a href="">Developer Center</a>
                                    </li>
                                    <li>
                                        <a href="">Graphics Core</a>
                                    </li>
                                    <li>
                                        <a href="">Arts and Crafts</a>
                                    </li>
                                    <li>
                                        <a href="">Idealation and Concepts</a>
                                    </li>
                                    <li>
                                        <a href="">Geco Games Center</a>
                                    </li>
                                </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="support">
                            <h3>Support</h3>
                                <ul>
                                    <li>
                                        <a href="">Kids support</a>
                                    </li>
                                    <li>
                                        <a href="">Games support</a>
                                    </li>
                                    <li>
                                        <a href="">Help line</a>
                                    </li>
                                </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="contact-us">
                            <h3>Contact us</h3>
                            <div class="socials">
                                <ul>
                                    <li>
                                        <a href=""><i class="fa-brands fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fa-brands fa-square-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fa-brands fa-tiktok"></i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fa-brands fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="get-in-touch">
                                <h3>Get In Touch</h3>
                                <div class="contact">
                                    <ul>
                                        <li>
                                            <a href="">gecogamesstudios@info.com</a>
                                        </li>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyrights">
                    <span>Geco Games @ 2023 - Tacion Solutions</span>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="./js/main.js"></script>
<script src="./js/universe.js"></script>
<script src="https://kit.fontawesome.com/3a3f083ec4.js" crossorigin="anonymous"></script>
</body>
</html>