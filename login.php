<?php
session_start();
include "db.php";

// Check if the form was submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Get username and password from form input safely
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = $_POST['password'];

  // Check if user exists
  $res = mysqli_query($conn, "SELECT * FROM users WHERE name='$username' LIMIT 1");

  if ($res && mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);

    // Verify password
    if (password_verify($password, $row['password'])) {
      $_SESSION['user'] = $row['name']; // Set session
      header("Location: index.php");    // Redirect to home
      exit();
    } else {
      echo "❌ Wrong password. <a href='login.html'>Try again</a>";
    }

  } else {
    echo "❌ You must register first before logging in. <a href='register.html'>Register here</a>";
  }

} else {
  echo "❌ Invalid request.";
}
?>
