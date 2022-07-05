<?php
$server="localhost";
$username = "root";
$password="";
$database="zalego";

$conn=mysqli_connect($server,$username,$password,$database);

$sqliquery = mysqli_query($conn, "SELECT * FROM enrollment");
$fetchRecords = mysqli_fetch_array($sqliquery);

// echo $fetchRecords["fullname"].' ' .echo $fetchRecords["email"]

while($fetchRecords =mysqli_fetch_array($sqliquery)) {

    echo $fetchRecords['fullname'].''.$fetchRecords['email'].'<br>';
}







?>