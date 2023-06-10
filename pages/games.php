<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Games Games | Games</title>
    <link rel="stylesheet" href="../styles/games.css">
    <link rel="stylesheet" href="../styles/nav.css">

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <script src="../js/navbtn.js"></script>
</head>
<body>
    <canvas id="stars" class="universe"></canvas>
    <div class="games-container">
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
        <div class="games-page">
            <div class="container">
                <h1>Geco Games</h1>
                <div class="games">
                    <div class="game-card">
                        <img src="../assets/games/letterloop.png" alt="Letter-Loop-World-Tour">
                        <div class="game-details">
                            <h2 class="game-title">Letter Loop : World Tour</h2>
                            <div class="buttons">
                                <a href="https://play.google.com/store" download class="game-link">Download Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="game-card">
                        <img src="../assets/games/ourlastprayer.png" alt="Our-Last-Prayer-Arena">
                        <div class="game-details">
                            <h2 class="game-title">Our Last Prayer: Arena</h2>
                            <div class="buttons">
                                <a href="https://play.google.com/store" download class="game-link">Download Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="game-card">
                        <img src="../assets/games/inshimu.png" alt="Inshimu-Two">
                        <div class="game-details">
                            <h2 class="game-title">Inshimu Two</h2>
                            <a href="#" download class="game-link">Coming Soon</a>
                        </div>
                    </div>
                    <div class="game-card">
                        <img src="../assets/global/nocoverimage.png">
                        <div class="game-details">
                            <h2 class="game-title">The Collapse Of Zero</h2>
                            <a href="#" download class="game-link">Coming Soon</a>
                        </div>
                    </div>
                </div>
                <div class="games">
                    <div class="game-card">
                        <img src="../assets/global/nocoverimage.png">
                        <div class="game-details">
                            <h2 class="game-title">IChidunu</h2>
                            <a href="#" download class="game-link">Coming Soon</a>
                        </div>
                    </div>
                    <div class="game-card">
                        <img src="../assets/global/nocoverimage.png">
                        <div class="game-details">
                            <h2 class="game-title">Chiyenga</h2>
                            <a href="#" download class="game-link">Coming Soon</a>
                        </div>
                    </div>
                    <div class="game-card">
                        <img src="../assets/global/nocoverimage.png">
                        <div class="game-details">
                            <h2 class="game-title">[Untitled]</h2>
                            <a href="#" download class="game-link">Coming Soon</a>
                        </div>
                    </div>
                    <div class="game-card">
                        <img src="../assets/global/nocoverimage.png">
                        <div class="game-details">
                            <h2 class="game-title">[Untitled]</h2>
                            <a href="#" download class="game-link">Coming Soon</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../js/universe.js"></script>
</html>
