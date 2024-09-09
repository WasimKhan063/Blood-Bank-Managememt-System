
<?php
include '../includes/db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $patient_name = $_POST['patient_name'];
    $blood_group = $_POST['blood_group'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $required_date = $_POST['required_date'];

    $query = "INSERT INTO patient_requests (patient_name, blood_group, phone, address, required_date) VALUES ('$patient_name', '$blood_group', '$phone', '$address', '$required_date')";
    $conn->query($query);
    header("Location: ../pages/thanks_p.php");
}
?>
<?php include '../includes/header.php'; ?>
<div class="stock">
    <div class="row">
        <div class="col-md-6">
            <div class="container mt-5">
                <h3 class="heading text-center mb-4 mt-2 text-danger">Request Blood</h3>
                <form method="POST">
                    <div class="form-group">
                        <label for="patient_name">Patient Name</label>
                        <input type="text" id="patient_name" name="patient_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="blood_group">Blood Group</label>
                        <select id="blood_group" name="blood_group" class="form-control" required>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" name="phone" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea id="address" name="address" class="form-control" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="required_date">Required Date</label>
                        <input type="date" id="required_date" name="required_date" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-danger" onclick="window.alert(`Requested`);">Submit
                        Request</button>
                </form>
            </div>
        </div>
        <div class="col-md-6 col-12 text-center p-3">
            <img id="img" src="../assets/images/getwell.jpg" alt="img" class="img-fluid rounded shadow-lg">
        </div>
    </div>
</div>
<?php include '../includes/footer.php'; ?>
</body>

</html>