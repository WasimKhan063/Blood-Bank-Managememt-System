<?php
include '../includes/db_connect.php';
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $request_id = $_POST['request_id'];
    $status = $_POST['status'];
    $query = "UPDATE patient_requests SET status='$status' WHERE request_id=$request_id";
    $conn->query($query);
}
?>

    <?php include '../includes/aheader.php'; ?>
    <div class="stock">
        <div class="container mt-5">
            <h2 class="heading text-center mb-4 mt-2 text-danger">Patient Requests</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="thead-dangers">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Blood_Group</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Approve</th>
                            <th>Reject</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $result = $conn->query("SELECT * FROM patient_requests WHERE status='Pending'");
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                <td>{$row['request_id']}</td>
                                <td>{$row['patient_name']}</td>
                                <td>{$row['blood_group']}</td>
                                <td>{$row['phone']}</td>
                                <td>{$row['address']}</td>
                                <td>{$row['required_date']}</td>
                                <td>{$row['status']}</td>
                                <td>
                                    <form action='update2.php' method='post' style='display:inline;'>
                                        <input type='hidden' name='request_id' value='{$row['request_id']}'>
                                        <input type='hidden' name='blood_group' value='{$row['blood_group']}'>
                                        <button type='submit' name='status' value='Approved' class='btn btn-success btn-sm' onclick='alert(\"Blood Stock updated successfully\")'>Approve</button>
                                        </form>
                                        </td>
                                        <td>
                                        <form action='reject2.php' method='post' style='display:inline;'>
                                        <input type='hidden' name='request_id' value='{$row['request_id']}'>
                                        <button type='submit' name='status' value='Rejected' class='btn btn-danger btn-sm'>Reject</button>
                                    </form>
                                </td>
                            </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <hr><br>
        <div class="term">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="heading text-center text-danger mb-4 mt-2">
                        "Accepted Requests"
                    </h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead class="thead-danger">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Group</th>
                                    <th>Phone</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                               $result = $conn->query("SELECT * FROM patient_requests WHERE status='Approved'");
                               while ($row = $result->fetch_assoc()) {
                                   echo "<tr>
                                <td>{$row['request_id']}</td>
                                <td>{$row['patient_name']}</td>
                                <td>{$row['blood_group']}</td>
                                <td>{$row['phone']}</td>
                                <td>{$row['created_at']}</td>
                            </tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 class="heading text-center text-danger mb-4 mt-2">
                        "Rejected Requests"
                    </h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead class="thead-danger">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Group</th>
                                    <th>Phone</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                               $result = $conn->query("SELECT * FROM patient_requests WHERE status='Rejected'");
                               while ($row = $result->fetch_assoc()) {
                                   echo "<tr>
                                <td>{$row['request_id']}</td>
                                <td>{$row['patient_name']}</td>
                                <td>{$row['blood_group']}</td>
                                <td>{$row['phone']}</td>
                                <td>{$row['created_at']}</td>
                            </tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <hr>
    </div>
    <?php include '../includes/footer.php'; ?>
</body>


</html>
