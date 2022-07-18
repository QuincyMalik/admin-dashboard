<?php
  require_once('logics/dbconnection.php');
  $sqlFetchStudent = mysqli_query($conn, "SELECT * FROM contactus WHERE no ='".$_GET['id']."' " );
  while($fetchStudentRecords = mysqli_fetch_array($sqlFetchStudent))
  {
    $firstname = $fetchStudentRecords['firstname'];
    $lastname = $fetchStudentRecords['lastname'];
    $phonenumber = $fetchStudentRecords['phonenumber'];
    $email = $fetchStudentRecords['email'];
    $Message = $fetchStudentRecords['message'];
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
                   <h4 class="card-title">Other information</h4>  
                </div> 
                <div class="card">
                    <div class="list-group">
                    <li class="list-group-item">Phone number:  <span class="float-right badge badge-primary"float-right><?php echo $phonenumber?></span> </li>
                    <div class="list-group-item">Message: <span class="float-right badge badge-primary"><?php echo $Message ?></span> </li>
                    </div> 
                </div>   
            </div>   
        </div>
            <div class="col-lg-6">
                <div class="card-header bg-dark text-white text-center ">
                    <h4 class="card-title">Personal information</h4>  
                </div> 
                <div class="card">
                    <div class="list-group">
                        <li class="list-group-item">First Name: <span class="float-right badge badge-primary"><?php echo $firstname ?></span> </li>
                        <li class="list-group-item">Last Name<span class="float-right badge badge-primary"><?php echo $lastname ?></span> </li>
                        <div class="list-group-item">email: <span class="float-right badge badge-primary"><?php echo $email ?></span> </li>
                    </div>              
                </div>
            </div>
    </div>
</div>
	
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html> 
                 