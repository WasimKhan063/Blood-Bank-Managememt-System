<?php
$user="root";
$host="localhost";
$pass="";
$dbname="blood_bank";

$con = mysqli_connect($host, $user, $pass, $dbname);

?>



<?php

$d_id = $_POST['d_id'];
$d_name = $_POST['d_name'];
$d_age = $_POST['d_age'];
$d_disease = $_POST['d_disease'];
$d_group = $_POST['d_group'];
$d_gender = $_POST['d_gender'];
$d_type = $_POST['d_type'];
$d_mobile = $_POST['d_mobile'];
$d_aadhar = $_POST['d_aadhar'];
$d_address = $_POST['d_address'];
$d_date = $_POST['d_date'];


//$sql="select * from donor_tb";

$query = "INSERT INTO `donors_tb` (d_id,d_name,d_age,d_disease,d_group,d_gender,d_type,d_mobile,d_aadhar,d_address,d_date) 
VALUES ('$d_id','$d_name','$d_age','$d_disease','$d_group','$d_gender','$d_type','$d_mobile','$d_aadhar','$d_address','$d_date')";
mysqli_query($con,$query);

header('location:submit.php');
?>