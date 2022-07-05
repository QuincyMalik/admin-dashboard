<?php
$msg='';
require_once('processRegister.php')

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="register-header" style="background-color: #ff4500; height: 50px;">Zalego Admin Register</div>
    <span><?php echo $msg ?></span>
    <div class="logo" style="display: flex; align-items:center; justify-content:center;"><img src="images/bootstrap.jpg" alt="picha" style= "height: 100px; width: 100px; border-radius: 50%; display: flex; align-items: center; justify-content: center; "></div>
    <div class="container . shadow">
        <form action="register.php" method="POST">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username">

            <label for="email" class="form-label">email</label>
            <input type="email" class="form-control" id="email" name="email">

            <label for="password" class="form-label">password</label>
            <input type="password" class="form-control" id="password" name="password">

            <label for="confirm" class="form-label">Confirm passsword</label>
            <input type="password" class="form-control" id="confirm=" name="confirm">

            <button type="submit" name="signUp" class="btn btn-primary-sm mt-3">Submit</button>

            <p class="mt-3">Have account? Sign in <a href="login.html" style="text-decoration: none;">Here</a></p>
        </form>
    </div>
</body>
</html>