<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="page">
        <h1 class="title">Registration</h1>
        <form action="insert_signup_info.php" method="POST">
            <div class="credentials">
                <label for="email">Enter your email address</label>
                <input type="email" id="email" name="email">
                <br><br>
                <label for="password">Enter your password</label>
                <input type="password" id="password" name="password">
                <br><br>
                <div class="submit">
                    <input type="submit" name="submit" id="submit_button" value="Sign Up">
                </div>
            </div>
        </form>
        <br>
    </div>
    <script lang="javascript">
        function func()
        {
            alert("Dont leave any fields empty!");
        }
    </script>
    <?php
    if(!empty($_SESSION))
    {
        echo "<script lang=javascript>func()</script>";
        session_unset();
        session_destroy();
    }
    ?>
</body>
</html>