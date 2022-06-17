<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="page">
        <h1 class="title">Sign in</h1>
        <form action="check_login_info.php" method="POST">
            <div class="credentials">
                <label for="email">Enter your email address</label>
                <input type="email" id="email" name="email">
                <br><br>
                <label for="password">Enter your password</label>
                <input type="password" id="password" name="password">
                <br><br>
                <div class="submit">
                    <input type="submit" name="submit" id="submit_button" value="Sign In">
                </div>
            </div>
        </form>
        <br>
        <div class="signup">
            New here? <a href="signup.php">Create an account</a>
        </div>
    </div>
    <script lang="javascript">
        function func1()
        {
            alert("Invalid email address or password or both");
        }
        function func2()
        {
            alert("The account already exists, Please log in");
        }
    </script>
    <?php
    if(!empty($_SESSION))
    {
        if(count($_SESSION) == 2)
        {
            //To remove session variable for new session
        }
        else if($_SESSION["check"] == false)
        {
            echo "<script lang=javascript>func1()</script>";
        }
        else if($_SESSION["check"] == true)
        {
            echo "<script lang=javascript>func2()</script>";
        }
        session_unset();
        session_destroy();
    }
    ?>
</body>
</html>