<?php
require('../config/db.php');
//include auth.php file on all user panel pages
include("../config/auth.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geco Games | Dashboard</title>

    <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="../styles/nav.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<body>
<canvas id="stars" class="universe"></canvas>
    <div class="client-container">
        <div class="nav-bar">
            <div class="content">
                <ul>
                <div class="img-container">
                            <li>
                                <a href="../index.php"><img src="../assets/icons/white-icon-geco.png" alt=""></a>
                            </li>
                        </div>
                        <div class="text-items">
                            <li>
                                <a href="../community/gamepass/gamepass.html">GamePass</a>
                            </li>
                            <li>
                                <a href="../community/clans/clans.html">clans</a>
                            </li>
                            <li>
                                <a href="./community.html">Community</a>
                            </li>
                            <li>
                                <a href="../community/events/events.html">events</a>
                            </li>
                            <li>
                                <a href="../community/forms/forms.html">forms</a>
                            </li>
                            <li>
                                <a href="../client/index.php"><?php if(isset($_SESSION["username"])) {
                                    echo ($_SESSION['username']);
                                } ?></a>
                            </li>
                            <li>
                                <a href="../config/logout.php">Log Out</a>
                            </li>
                    </div>
                </ul>
            </div>
        </div>
    </div>
    <h2>Content Coming Soon</h2>
</body>
<script src="../js/universe.js"></script>
</html>