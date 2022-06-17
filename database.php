<?php
$connection = mysqli_connect("localhost","root","");
$query = "CREATE DATABASE validation";
mysqli_query($connection,$query);
mysqli_close($connection);
$connection = mysqli_connect("localhost","root","","validation");
$query = "CREATE TABLE credentials (
    email VARCHAR(50) PRIMARY KEY,
    password varchar(20) NOT NULL
    )";
mysqli_query($connection,$query);
mysqli_close($connection);
?>