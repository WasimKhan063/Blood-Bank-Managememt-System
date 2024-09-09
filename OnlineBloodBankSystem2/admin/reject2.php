<?php
include '../includes/db_connect.php';

// print_r($_POST);
$id = $_POST['request_id'];
$val = $_POST['status'];

$sql1 = "UPDATE patient_requests SET status = '$val' WHERE request_id = '$id'";

mysqli_query($conn, $sql1);

header('location: patient_requests.php');


?>