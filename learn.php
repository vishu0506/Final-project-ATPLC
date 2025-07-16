<?php
session_start();
if (!isset($_SESSION['user'])) {
  header("Location: register.html");
  exit();
}

include "db.php";

// Get selected language
$lang = $_GET['lang'] ?? 'English';

// Fetch words for the selected language
$query = "SELECT * FROM words WHERE lang='$lang'";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Learn <?php echo htmlspecialchars($lang); ?></title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f2f2f2;
      padding: 40px;
      text-align: center;
    }

    h2 {
      color: #2c3e50;
    }

    .word-cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
      gap: 20px;
      margin-top: 30px;
      max-width: 1000px;
      margin-left: auto;
      margin-right: auto;
    }

    .lang-card {
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      font-size: 18px;
    }

    a {
      margin-top: 20px;
      display: inline-block;
      color: #007bff;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <h2>📘 Learning: <?php echo htmlspecialchars($lang); ?></h2>
  <a href="index.php">← Back to Home</a>

  <div class="word-cards">
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
      <div class="lang-card">
        <strong><?= htmlspecialchars($row['word']); ?></strong><br>
        <?= htmlspecialchars($row['meaning']); ?>
      </div>
    <?php } ?>
  </div>
</body>
</html>
