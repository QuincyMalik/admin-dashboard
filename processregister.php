<?php

require_once('connection.php');

if(isset($_POST['signUp']))
{
    // fetch form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $Post['password'];
    cpass = $POST['cpassword'];

    // check if username exist in the database
    $sqlUsername= mysql_query($conn,"SELECT * FROM account WHERE username = '$username' ");
    $checkUsername=mysqli_num_rows($sqlUsername);

    // check for email
    $sqlEmail= mysqli_num_rows($sqlEmail);

if($checkUsername != 0){
    $msg ="Username already exist";
}
elseif($checkemail != 0){
    $msg ="Email already in use. please try a different email address";
}

// password confirmation
elseif($password != $cpass)
{
    $msg ="Passwords do not match";
}

// submit data to databse table
else{
    // create insert query
    $sql = mysqli_query($conn, "INSERT INTO account(username,email,password)
     VALUES('$username','$email','$password')");
}
 if($sql)
 {
    $msg= "Data submitted succesfully";
 }
 else
 {
    $msg= 'Error';
 }
}















?>