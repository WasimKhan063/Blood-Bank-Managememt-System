<?php
include '../includes/db_connect.php';

// print_r($_POST);
$id = $_POST['donor_id'];
$blood = $_POST['blood_group'];
$val = $_POST['status'];

$sql1 = "UPDATE donors SET status = '$val' WHERE donor_id = '$id'";

$sql2 = "UPDATE blood_stock SET quantity = quantity + 1 WHERE blood_group = '$blood'";

if (mysqli_query($conn, $sql1)) {
    mysqli_query($conn, $sql2);
    } else {
    echo "Status did not changed, Check the code and conn.";
}

header('location: doner_requests.php');


?>
