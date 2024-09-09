<?php
include '../includes/db_connect.php';

// print_r($_POST);
$id = $_POST['donor_id'];
$val = $_POST['status'];

$sql1 = "UPDATE donors SET status = '$val' WHERE donor_id = '$id'";

mysqli_query($conn, $sql1);

header('location: doner_requests.php');


?>