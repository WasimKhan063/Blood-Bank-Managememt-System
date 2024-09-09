<?php
include '../includes/db_connect.php';

// print_r($_POST);
$id = $_POST['request_id'];
$blood = $_POST['blood_group'];
$val = $_POST['status'];

// Update the status of the patient request
$sql1 = "UPDATE patient_requests SET status = '$val' WHERE request_id = '$id'";

// Check if blood stock for the selected blood group is available
$sql_check_quantity = "SELECT quantity FROM blood_stock WHERE blood_group = '$blood'";
$result = mysqli_query($conn, $sql_check_quantity);
$row = mysqli_fetch_assoc($result);

// Proceed if the blood stock is greater than zero
if ($row['quantity'] > 0) {
    // Decrement blood stock if the quantity is greater than 0
    $sql2 = "UPDATE blood_stock SET quantity = quantity - 1 WHERE blood_group = '$blood'";

    // Execute the patient request status update and decrement blood stock
    if (mysqli_query($conn, $sql1) && mysqli_query($conn, $sql2)) {
        header('location: patient_requests.php');
    } else {
        echo "Error updating status or blood stock.";
    }
} else {
    // If no stock available, notify that blood stock is zero
    echo "<script>
            alert('Error: Blood stock for $blood is not available.');
            window.location.href = 'patient_requests.php'; // Redirect after alert
          </script>";
}


?>
