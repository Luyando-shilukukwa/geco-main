<?php
    require ('db.php');

    if(isset($_REQUEST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($conn, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);

        //check if user exists in the db
        $query = "SELECT * FROM `users` WHERE username='$username' AND password='" . md5('$password') . "'";

        $result = mysqli_query($conn, $query);
        $rows = mysqli_num_rows($result);

        if($rows = 1){
            $_SESSION['username'] = '$username';
            //Redirect user to dashboard page

            header("Location: ../client/index.php ");
        }
        else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    }
?>