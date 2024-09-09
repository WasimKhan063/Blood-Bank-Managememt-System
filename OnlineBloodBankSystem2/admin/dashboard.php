<?php
include '../includes/db_connect.php';
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

// Fetch total donors
$donors_query = "SELECT COUNT(*) AS total_donors FROM donors WHERE status = 'Confirmed'";
$donors_result = $conn->query($donors_query);
$donors_row = $donors_result->fetch_assoc();
$total_donors = $donors_row['total_donors'];

// Fetch total patients
$patients_query = "SELECT COUNT(*) AS total_patients FROM patient_requests WHERE status='Approved'";
$patients_result = $conn->query($patients_query);
$patients_row = $patients_result->fetch_assoc();
$total_patients = $patients_row['total_patients'];

// Fetch donor requests (example: status 'Pending')
$donor_requests_query = "SELECT COUNT(*) AS donor_requests FROM donors WHERE status='Pending'";
$donor_requests_result = $conn->query($donor_requests_query);
$donor_requests_row = $donor_requests_result->fetch_assoc();
$donor_requests = $donor_requests_row['donor_requests'];

// Fetch patient requests (example: status 'Pending')
$patient_requests_query = "SELECT COUNT(*) AS patient_requests FROM patient_requests WHERE status='Pending'";
$patient_requests_result = $conn->query($patient_requests_query);
$patient_requests_row = $patient_requests_result->fetch_assoc();
$patient_requests = $patient_requests_row['patient_requests'];

?>

<?php include '../includes/aheader.php'; ?>
<div class="stock">
    <h3 class="heading text-center mb-4 mt-2 text-danger">Welcome To Admin Dashboard</h3>

    <div class="box-container">

        <div class="box">
            <a class="text-danger" href="patient_requests.php"> <h3>Patients Requests</h3> </a>
            <p><?php echo $patient_requests; ?></p>
        </div>

        <div class="box">
            <a class="text-danger" href="doner_requests.php"><h3>Donors Requests</h3> </a>
            <p><?php echo $donor_requests; ?></p>
        </div>

        <div class="box">
            <h3>Total Donors</h3>
            <p><?php echo $total_donors; ?></p>
        </div>

        <div class="box">
            <h3>Total Patients</h3>
            <p><?php echo $total_patients; ?></p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h3 class="heading text-center text-danger mb-4 mt-2">
                "Accepted Donor"
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
                        $result = $conn->query("SELECT * FROM donors WHERE status='Confirmed'");
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                <td>{$row['donor_id']}</td>
                                <td>{$row['name']}</td>
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
                        "Accepted Patients"
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
                </div>    </div>
</div>
<?php include '../includes/footer.php'; ?>
</body>

</html>