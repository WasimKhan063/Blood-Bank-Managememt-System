<?php
include '../includes/db_connect.php';
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $donor_id = $_POST['donor_id'];
    $message_text = $_POST['message_text'];
    $query = "INSERT INTO messages (donor_id, message_text) VALUES ('$donor_id', '$message_text')";
    $conn->query($query);
}
?>

    <?php include '../includes/aheader.php'; ?>
    <!-- <img src="assets/images/logo2.jpg" alt=""> -->
    <div class="stock">
        <div class="container mt-5">
            <h2>Send Message to Donors</h2>
            <form method="POST">
                <div class="form-group">
                    <label for="donor_id">Donor ID</label>
                    <input type="number" id="donor_id" name="donor_id" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="message_text">Message</label>
                    <textarea id="message_text" name="message_text" class="form-control" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </div>
    <?php include '../includes/footer.php'; ?>
</body>

</html>