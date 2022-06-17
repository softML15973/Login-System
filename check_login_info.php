<?php
    session_start();
    $connection = mysqli_connect("localhost","root","","validation");
    if(!$connection)
    {
        die("Database cannot be connect at the current moment, Try again later!");
    }
    else
    {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $query = "SELECT email,password from credentials WHERE email = '$email' and password = '$password'";
        $result = mysqli_query($connection,$query);
        if(mysqli_num_rows($result) == 1)
        {
            $_SESSION["email"] = $email;
            $_SESSION["password"] = $password;
            header("location: home.php");
        }
        else if(mysqli_num_rows($result) == 0)
        {
            $_SESSION["check"] = false;
            header("location: login.php");
        }
    }
?>