<?php 
    require ('db.php');

    //removes back slashes
    $username = stripslashes($_REQUEST['username']);

    //escapes special characters
    $username = mysqli_real_escape_string($conn, $username);
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($conn, $email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);

    $query = "INSERT into `users` (username, email, password) VALUES ('$username', '$email', '".md5($password)."')";

    $result = mysqli_query($conn, $query);

    if($result) {
        header("Location: ../pages/login.php ");
    }
    else {
        "<div class='form'>
            <h3>Required fields are missing.</h3><br/>
            <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
        </div>";
    }
?>