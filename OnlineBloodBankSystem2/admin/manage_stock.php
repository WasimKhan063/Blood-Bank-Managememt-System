<?php
include '../includes/db_connect.php';
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $blood_group = $_POST['blood_group'];
    $quantity = $_POST['quantity'];
    $query = "UPDATE blood_stock SET quantity=$quantity WHERE blood_group='$blood_group'";
    $conn->query($query);
}
?>

    <?php include '../includes/aheader.php'; ?>
    <div class="stock">
        <!-- <div class="container mt-5"> -->
        <h2 class="heading text-center mb-4 mt-2 text-danger">Blood Stock</h2> <hr>
        <div class="row justify-content-center">
            <!-- Left Column: Update Stock Form -->
            <div class="col-md-5 text-center my-3 ">
                <h3 class="heading text-center mb-4 mt-2 text-danger">Update Blood Stock</h3>  <br>
                <form method="POST" class="d-inline-block form-font">
                    <div class="form-group">
                        <label for="blood_group">Blood Group:</label>
                        <select id="blood_group" name="blood_group" class="form-control w-50 mx-auto" required>
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
                    <div class="form-group mt-2">
                        <label for="quantity">Quantity:</label>
                        <input type="number" id="quantity" name="quantity" class="form-control w-50 mx-auto" required>
                    </div> <br>
                    <button type="submit" class="btn btn-danger">Update Stock</button>
                </form>
            </div>

            <!-- Right Column: Blood Stock Cards -->
            <div class="col-md-7 left-bdr">
                <h3 class="heading text-center mb-4 mt-2 text-danger">Current Blood Stock</h3> 
                <div class="d-flex flex-wrap justify-content-between px-md-5">
                    <?php
                    $result = $conn->query("SELECT * FROM blood_stock");
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='card mb-4'>
                    <div class='card-body text-center'>
                        <h5 class='card-title'><span id='space'>{$row['blood_group']}</span> <span id='space'> Qnt: {$row['quantity']}</span></h5>
                    </div>
                  </div>";
                    }
                    ?>
                </div>
            </div>

        </div>
        <!-- </div> -->
    </div>
    <?php include '../includes/footer.php'; ?>
</body>




</html>