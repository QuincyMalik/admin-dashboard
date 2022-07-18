<?php
  require_once('logics/dbconnection.php');
  $sqlFetchStudent = mysqli_query($conn, "SELECT * FROM enrollment WHERE no ='".$_GET['id']."' " );
  while($fetchStudentRecords = mysqli_fetch_array($sqlFetchStudent))
  {
    $fullname = $fetchStudentRecords['fullname'];
    $phonenumber = $fetchStudentRecords['phonenumber'];
    $email = $fetchStudentRecords['email'];
    $gender = $fetchStudentRecords['Gender'];
    $course= $fetchStudentRecords['Course'];
    $created_at = $fetchStudentRecords['created_at'];
  }











?>










<!DOCTYPE html>
<html>
<?php require_once('includes/headers.php') ?>
<body>

<?php require_once ('includes/navbars.php') ?>
	<!-- All our code. write here   -->

<div class="Sidebar">
    <?php require_once('includes/sidebar.php') ?>
</div>			
<div class="Main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card-header bg-dark text-white text-center ">
                    <h4 class="card-title">Personal information</h4>  
                </div> 
                <div class="card">
                    <div class="list-group">
                        <li class="list-group-item">Full Name: <span class="float-right badge badge-primary"><?php echo $fullname ?></span> </li>
                        <li class="list-group-item">Phone number:  <span class="float-right badge badge-primary"><?php echo $phonenumber ?></span> </li>
                        <li class="list-group-item">Email:  <span class="float-right badge badge-primary"float-right><?php echo $email ?></span> </li>
                </div>    
            </div>   
        </div>
            <div class="col-lg-6">
                <div class="card-header bg-dark text-white text-center ">
                    <h4 class="card-title">Other information</h4>  
                </div> 
                <div class="card">
                    <ul class="list-group">
                        <li class="list-group-item">Gender: <span class="float-right badge badge-primary"><?php echo $gender ?></span> </li>
                        <li class="list-group-item">Course:  <span class="float-right badge badge-primary"><?php echo $course ?></span> </li>
                        <li class="list-group-item">Enrolled On:  <span class="float-right badge badge-primary"float-right><?php echo $created_at ?></span> </li>
                    </ul>    
                </div>   
            </div>
        </div>
    </div>
</div>
	
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html> 