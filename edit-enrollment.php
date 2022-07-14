<?php 
$message="";
require_once('logics/dbconnection.php');
$queryuser = mysqli_query($conn, "SELECT * FROM enrollment WHERE no='".$_GET['id']."'");

while($fetchuser=mysqli_fetch_array($queryuser))
{
    $id = $fetchuser['no'];
    $fullname = $fetchuser['fullname'];
    $phonenumber = $fetchuser['phonenumber'];
    $email = $fetchuser['email'];
    $gender = $fetchuser['Gender'];
    $course = $fetchuser['Course'];
    
}

// update user recorda
if(isset($_POST["updateRecords"]) )
{
    $name = $_POST['fullname'];
    $phonenumber = $_POST['phonenumber'];
    $emailaddress = $_POST['email'];
    $formgender = $_POST['Gender'];
    $formcourse = $_POST['Course'];

    $updatequery = mysqli_query($conn,
    "UPDATE enrollment SET fullname='$name', phonenumber='$phonenumber',email='$emailaddress', gender='$formgender', course = '$formcourse',
    WHERE no='".$_GET['id']."'");

    if($updatequery)
    {
        $message="Data updated";
    }
    else{
        $message="Records not updated".mysqli_error($conn);
    }
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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-white" style="text-align: center;">
                            <h4>Edit Student
                                <?php echo $fullname ?>
                            </h4>
                            <span>
                                <?php echo $message ?>
                            </span>
                        </div>
                        <div class="card-body">
                            <form action="edit-enrollment.php?id=<?php echo $name ?>" method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="full name" class="form-label"><b>Full name:</b></label>
                                        <input type="text" name="fullname" value="<?php echo $fullname ?>"
                                            class="" placeholder="Enter your full name">
                                    </div> 
                                    <div class="col-lg-6">
                                        <label for="phone" class="form-label"><b>Phone number:</b></label>
                                        <input type="tel" name="phonenumber" value="<?php echo $phonenumber ?>"class="" placeholder="+2547...">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="E-mail" class="form-label"><b>Email address:</b></label>
                                        <input type="email" name="email" value="<?php echo $email ?>"
                                            class="" placeholder="Enter your email">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="gender" class="form-label"><b>What is your gender</b></label>
                                        <select class="" name="Gender" aria-label="Default select example">
                                            <option >--select your gender--</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-5 mt-5 col-lg-6">
                                    <label for="course" class="form-label"><b>What's your preffered course?</b></label>
                                    <select name="Course" class="" aria-label="Default select example"
                                        name="course">
                                        <option value="">...select your course--</option>
                                        <option value="Web design">Web design</option>
                                        <option value="Web development">Web development</option>
                                        <option value="Android">Android</option>
                                        <option value="Game development">Game development</option>
                                        <option value="Graphic design">Graphic design</option>
                                        <option value="Cyber security">Cyber security</option>
                                    </select>
                                    <div>
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col-lg-6">
                                            <button type="submit" name="updateRecords"
                                                class="btn btn-primary mb-7">Update</button>
                                        </div>
                                    </div>
                                </div>    
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>