<?php
include "db.php";
$answers = $_POST['ans'];
$score = 0;
foreach ($answers as $id => $selected) {
  $res = mysqli_query($conn, "SELECT correct_option FROM questions WHERE id=$id");
  $correct = mysqli_fetch_assoc($res)['correct_option'];
  if ($selected == $correct) $score++;
}
?>
<h2>Your Score: <?php echo $score; ?>/<?php echo count($answers); ?></h2>
<a href='index.html'>Back to Home</a>
