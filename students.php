<?php

require_once ('logics/dbconnection.php');

$sqliquery = mysqli_query($conn, "SELECT * FROM enrollment");

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
            		<div class="card-header bg-dark text-white text-center">
                 		<span>Students  <a href="add-enrollment.php"> Add students </a></span>
                   	</div>
					<div class="card-body">
					<table class="table table-striped table-hover table responsive" style="font-size: 12px;">	
						<thead>
							<tr>
								<th>NO.</th>
								<th>Fullname</th>
								<th>Phone Number</th>
								<th>Email</th>
								<th>Gender</th>
								<th>Course</th>
								<th>Enrolled on</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php while($fetchRecords =mysqli_fetch_array($sqliquery)){ ?>
								<tr>
									<td><?php echo $fetchRecords['no'] ?></td>
									<td><?php echo $fetchRecords['fullname'] ?></td>
									<td><?php echo $fetchRecords['phonenumber'] ?></td>
									<td><?php echo $fetchRecords['email'] ?></td>
									<td><?php echo $fetchRecords['Gender'] ?></td>
									<td><?php echo $fetchRecords['Course'] ?></td>
									<td><?php echo $fetchRecords['created_at'] ?></td>
									<td>
										<a href="edit-enrollment.php?id=<?php echo $fetchRecords['no'] ?>" class="btn btn-primary btn-sm">
											<i class="fa fa-edit"></i>
										</a>
										<a href="view-enrollment.php?id=<?php echo $fetchRecords['no'] ?>" class="btn btn-info btn-sm">
											<i class="fa fa-eye"></i>
										</a>
										<a href="delete-enrollment.php?id=<?php echo $fetchRecords['no'] ?>" class="btn btn-danger btn-sm">
											<i class="fa fa-trash"></i>
										</a>
									</td>	
								</tr>
							<?php }?>
						</tbody>
					</table>
					</div>
               	</div>
			</div>	
        </div>
	</div>

	
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>



										