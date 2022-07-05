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
    <div class="register-header" style="background-color: #ff4500; height: 50px;">Zalego Training|Admin Login</div>
    <div class="logo" style="display: flex; align-items:center; justify-content:center;"><img src="images/bootstrap.jpg" alt="picha" style= "height: 100px; width: 100px; border-radius: 50%; display: flex; align-items: center; justify-content: center; "></div>
    <form action="register.php" method="POST">

        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username">

        <label for="password" class="form-label">password</label>
        <input type="password" class="form-control" id="password" name="password">

        <p class="mt-3">Have account? Sign in <a href="register.html" style="text-decoration: none;">Here</a></p>
    </form>
</body>
</html>