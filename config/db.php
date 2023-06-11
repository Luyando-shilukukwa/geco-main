<?php
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "geco_games";

    $conn = mysqli_connect('localhost', 'root', '', 'geco_games');

    //check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_errno();
    }
?>