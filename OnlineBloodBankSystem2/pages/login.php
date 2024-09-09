<?php
include '../includes/db_connect.php'; // Adjust path as necessary

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Check if the connection is successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement
    $sql = "SELECT * FROM admin WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        // Verify password
        if (password_verify($password, $row['password'])) {
            $_SESSION['admin_id'] = $row['admin_id']; // Assuming 'id' is the primary key
            $_SESSION['username'] = $username;
            // Debug statement
            echo "Redirecting to dashboard.php";
            header("Location: ../admin/dashboard.php");
            exit();
        } else {
            $error = "Invalid username or password.";
        }
    } else {
        $error = "Invalid username or password.";
    }
}
?>

    <?php include '../includes/header.php'; ?>
    <div class="stock">
        
        <div class="row">
    <div class="col-md-5">
    <div class="container">
            <h3 class="heading text-center mb-4 mt-2 text-danger">Admin Login</h3>
            <?php if (isset($error)) {
                echo "<div class='alert alert-danger'>$error</div>";
            } ?>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control width="50%" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control width="50%" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-danger">Login</button>
            </form>
        </div>
    </div>


    <div class="col-md-7 text-lg-center mr-md-n5 pb-5"> <br>
        <img src="../assets/images/objective.jpg" alt="img" width="45%">

    </div>
</div>
<hr>
    </div>
    <?php include '../includes/footer.php'; ?>
</body>

</html>