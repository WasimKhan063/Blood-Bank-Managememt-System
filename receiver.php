<?php
$user="root";
$host="localhost";
$pass="";
$dbname="blood_bank";

$con = mysqli_connect($host, $user, $pass, $dbname);

?>

<?php

$r_id = $_POST['r_id'];
$r_name = $_POST['r_name'];
$r_age = $_POST['r_age'];
$r_disease = $_POST['r_disease'];
$r_group = $_POST['r_group'];
$r_qnty = $_POST['r_qnty'];
$r_gender = $_POST['r_gender'];
$r_type = $_POST['r_type'];
$r_mobile = $_POST['r_mobile'];
$r_aadhar = $_POST['r_aadhar'];
$r_address = $_POST['r_address'];
$r_date = $_POST['r_date'];

//$sql="select*from receiver_tb";
//$res =mysqli_query($con,$sql);

$query="INSERT INTO `receivers_tb` (r_id, r_name, r_age,r_disease,r_group,r_qnty,r_gender,r_type,r_mobile,r_aadhar,r_address,r_date) 
VALUES ('$r_id','$r_name','$r_age','$r_disease','$r_group','$r_qnty','$r_gender','$r_type','$r_mobile','$r_aadhar','$r_address','$r_date') ";
mysqli_query($con ,$query);
header('location:submit.php');
?>