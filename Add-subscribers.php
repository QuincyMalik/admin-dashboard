<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "zalego";

$conn = mysqli_connect($server,$username,$password,$database);
if($conn)
{
    echo "connection";
}
else{
    echo "Disconnection";
}

if( isset($_POST['submitbutton'])  )
{
    // 1.Fetch Form Data
        $email = $_POST ['email'];
    // 2.Submit Form Data
       $insertData = mysqli_query($conn, "INSERT INTO subscribers(email)
       VALUES('$email')");
       if($insertData)
       {
           echo "Data Submitted Successfully";
       }
       else{
           echo "Error Occured";
       }
}
?>








<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Admin Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Creating admin dashboard">
	<meta name="keywords" content="HTML,CSS,Zalego,Technology,Zalego institute,JavaScript">
	<meta name="author" content="Your name">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<!-- All our code. write here   -->
	<?php require_once('includes/navbars.php') ?>
<div class="Sidebar">
	<?php require_once('includes/sidebar.php') ?>
</div>
<div class="Main-content">
    <div class="container-fluid">
        <div class="row">
               <div class="col-lg-12">
               <div class="card">
            	   <div class="card-header bg-dark text-white text-center">
                      <a class="float-left text-white" href="subscribe.php">
                             <span><i class="fa fa arrow circle-left"></i></span>
                               <span>Back</span>
                          </a>
                               <h4>Add subscribers </h4>
                                
                    </div>
                    <div class="card-body">
                        <form action="add-subscribers.php" Method="POST">
                            <div class="row">
                                <div class="col-lg-6">
                                   <label for="email" class="form-label">Email Address:</label>
                                    <input type="text" name="email" class="" placeholder="Please enter your email address">
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col-lg-6">
                                    <button type="submit" name="submitbutton" class="btn btn-primary">Subscribe</button>




                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>



										