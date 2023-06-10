<?php
    require '../config/registration.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Geco Games | Signup</title>

	<link rel="stylesheet" href="../styles/signin.css">
	<link rel="stylesheet" href="../styles/nav.css">

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"> 

    <script src="../js/navbtn.js"></script>
</head>
<body>
<canvas id="stars" class="universe"></canvas>
<div class="signup-container">
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
	<div class="background">
		<div class="form-container">
			<h1>Create an Account</h1>
			<form name="signup" onsubmit="return validateForm()" method="post" action="">
				<label for="username">
					<input type="text" id="username" name="username" placeholder="Username">
				</label>
				<label for="email">
					<input type="email" id="email" name="email" placeholder="Email Address">
				</label>
				<label for="password">
					<input type="password" id="password" name="password" placeholder="Password">
				</label>
				<label for="confirm-password">
					<input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm Password">
				</label>
				<input type="submit" value="Create Account">
			</form>
			<div id="error-box"></div>
			<div class="links">
				<a href="login.html">Already have an account? Sign in</a>
			</div>
		</div>
	</div>
</div>
</body>
<script src="../js/universe.js"></script>
<script src="../js/validation.js"></script>
</html>

			
