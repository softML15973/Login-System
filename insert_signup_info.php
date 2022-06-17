<?php
    session_start();
    $connection = mysqli_connect("localhost","root","","validation");
    if(!$connection)
    {
        die("Database cannot be connected at the current moment, Try again later!<br>");
    }
    else
    {
        $email = $_POST["email"];
        $password = $_POST["password"];
        if($email == "" || $password == "")
        {
            $_SESSION["check"] = -1;
            header("location: signup.php");
        }
        else
        {
            $query = "SELECT email from credentials WHERE email = '$email'";
            $result = mysqli_query($connection,$query);
            if(mysqli_num_rows($result) == 1)
            {
                $_SESSION["check"] = true;
                header("location: login.php");
            }
            else
            {
                $query = "INSERT INTO credentials(email,password) VALUES ('$email','$password')";
                $result = mysqli_query($connection,$query);
                header("location: login.php");
            }
        }
        
    }
?>