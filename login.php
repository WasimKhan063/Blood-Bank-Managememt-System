<?php
// Start the session
session_start();

// Get user input from POST request
$username = $_POST['username'];
$password = $_POST['password'];

// Database connection details
$user = "root";
$host = "localhost";
$pass = "";
$dbname = "blood_bank";

// Create a new MySQLi connection
$con = mysqli_connect($host, $user, $pass, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare the SQL query with placeholders
$sql = "SELECT * FROM admins_tb WHERE username = ? AND password = ?";

// Prepare and bind
$stmt = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($stmt, "ss", $username, $password);

// Execute the query
mysqli_stmt_execute($stmt);

// Get the result
$result = mysqli_stmt_get_result($stmt);

// Check if any row was returned
if (mysqli_num_rows($result) > 0) {
    // Fetch the result
    while ($row = mysqli_fetch_assoc($result)) {
        // Set session variables
        $_SESSION["username"] = $row['username'];
        $_SESSION["password"] = $row['password'];

        // Redirect to the stock page
        header('Location: http://localhost/training/Blood_bank/stock.php');
        exit(); // Ensure no further code is executed after the redirect
    }
} else {
    // Output error message
    echo "Error: Invalid username or password.";
}

// Close the statement and connection
mysqli_stmt_close($stmt);
mysqli_close($con);
?>
