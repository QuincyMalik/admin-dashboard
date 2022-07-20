<?php
require_once('logics/dbconnection.php');


if(isset($_POST["submitapplication"]))
{
    // 1. fetch form data
    $fullname = $_POST["fullname"];
    $phonenumber = $_POST["phonenumber"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $course = $_POST["course"];

    // 2. submit form data
    $insertdata = mysqli_query($conn, "INSERT INTO enrollment(fullname,phonenumber,email,gender,course)VALUES('$fullname','$phonenumber','$email','$gender','$course')");
    
    if($insertdata)
    {
        echo "Data submitted successfully";
    }
    else
    {
        echo "Error".mysqli_error($conn);
    }
}




?>




 <!DOCTYPE html>
<html lang="en">
    <?php require_once('includes/headers.php')?>

<body>
    <!-- nav starts here -->
    <?php require_once('includes/navbars.php')?>

    <div class="sidebar">
	<?php require_once('includes/sidebar.php')?>
	</div>

        
        <div class="card" style="width: 80%; padding-top:5%; margin-left:5%;">
            <div class="card-body" style="margin-left:5%;">
                <form action="enroll.php" method="POST" class="container">
                    <h5 class="card-title">Sign up today?</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="fullname" class="form-label">Full Name:</label>
                            <input type="text" name="fullname" class="form-control" placeholder="Enter your full name">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="phonenumber" class="form-label">Phone Number:</label>
                            <input type="text" name="phonenumber" class="form-control" placeholder="+2547...">
                        </div>
                    </div>
                    <div class="row" style="padding-top:3%;">
                        <div class="col-lg-6">
                            <label for="email" class="form-label">Email Address:</label>
                            <input type="text" name="email" class="form-control" placeholder="Please enter your email address">
                        </div>
                        <div class="col-lg-6">
                            <label for="gender" class="form-label"><b>What is your gender</b></label>
                            <select name="gender" class="form-select" aria-label="Default select example">
                                <option selected>--select your gender--</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="row" style="padding-top:3%;">
                        <div class="col-lg-12">
                            <label for="gender" class="form-label">What's your preffered course</label>
                            <select class="form-select" name="course" aria-label="Default select example">
                                <option selected>--select your course--</option>
                                <option value="Software Development">Software Development</option>
                                <option value="Data analysis">Data analysis</option>
                            </select>
                        </div>
                    </div>
           
                
                
                    <div class="row" style="padding-top:8px;">
                        <div class="col-lg-3">
                            <button type="submit" name="submitapplication" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                    
                </div>
                </form>

                    
             
            </div>
        </div>        
        
    </div>
                        
            

    <hr>
    <footer>
        &copy;Zalego Academy 2022
    </footer>







    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <!-- <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
</body>
</html>