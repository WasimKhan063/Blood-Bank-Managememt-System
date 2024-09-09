
<?php
include '../includes/db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $blood_group = $_POST['blood_group'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $date = $_POST['date'];
    
    $query = "INSERT INTO donors (name, email, blood_group, phone, address, last_donation_date) VALUES ('$name', '$email', '$blood_group', '$phone', '$address', '$date')";
    $conn->query($query);
    header("Location: ../pages/thanks_d.php");
}
?>
    
    <?php include '../includes/header.php'; ?>
    <div class="stock">
        <div class="row">
            <div class="col-md-6"> <div class="container mt-5">
                <h3 class="heading text-center mb-4 mt-2 text-danger">Donor Registration</h3>
                <form method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" required>
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
                        <input type="text" id="phone" name="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea id="address" name="address" class="form-control" rows="4"></textarea>
                    </div>
        
                    <div class="form-group">
                        <label for="address">Donation Date</label>
                        <input type="date" id="date" name="date" class="form-control">
                        
                    </div>
        
                    <button type="submit" class="btn btn-danger">Register</button>
                </form>
            </div></div>
            <div class="col-md-6 col-12 text-center p-3">
                <img id="img" src="../assets/images/donor.jpeg" alt="img" class="img-fluid rounded shadow-lg">
            </div>
                </div>
   
    <script src="../assets/js/scripts.js"></script>
    </div>
    <?php include '../includes/footer.php'; ?>
</body>

</html>