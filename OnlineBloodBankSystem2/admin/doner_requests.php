<?php
include '../includes/db_connect.php';
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

?>

    <?php include '../includes/aheader.php'; ?>
    <div class="stock">
        <div class="container mt-5">
            <h3 class="heading text-center mb-4 mt-2 text-danger">Donor Requests</h3>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="thead-danger">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Blood Group</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Confirm</th>
                            <th>Reject</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $result = $conn->query("SELECT * FROM donors WHERE status='Pending'");
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                <td>{$row['donor_id']}</td>
                                <td>{$row['name']}</td>
                                <td>{$row['blood_group']}</td>
                                <td>{$row['phone']}</td>
                                <td>{$row['address']}</td>
                                <td>{$row['last_donation_date']}</td>
                                <td>{$row['status']}</td>
                                <td> 
                                    <form action='update.php' method='post' style='display:inline;'>
                                        <input type='hidden' name='donor_id' value='{$row['donor_id']}'>
                                        <input type='hidden' name='blood_group' value='{$row['blood_group']}'>
                                        <button type='submit' name='status' value='Confirmed' class='btn btn-success btn-sm' onclick='alert(\"Blood Stock updated successfully\")'>Complete</button>
                                        </form>
                                        </td>
                                        <td>
                                        <form action='reject1.php' method='post' style='display:inline;'>
                                        <input type='hidden' name='donor_id' value='{$row['donor_id']}'>
                                        <button type='submit' name='status' value='' class='btn btn-danger btn-sm'>Reject</button>
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
                        "Rejected Donor"
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
                                $result = $conn->query("SELECT * FROM donors WHERE status=''");
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>
                                <td>{$row['donor_id']}</td>
                                <td>{$row['name']}</td>
                                <td>{$row['blood_group']}</td>
                                <td>{$row['phone']}</td>
                                <td>{$row['last_donation_date']}</td>
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