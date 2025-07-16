<?php
session_start();

// 🔒 Check if user is logged in
if (!isset($_SESSION['user'])) {
  // If not logged in, redirect to login page
  header("Location: login.html");
  exit();
}

// ✅ If logged in, redirect to learn page with selected language
if (isset($_GET['lang'])) {
  $lang = $_GET['lang'];
  header("Location: learn.php?lang=" . urlencode($lang));
  exit();
} else {
  // Default language fallback
  header("Location: learn.php?lang=English");
  exit();
}
?>
