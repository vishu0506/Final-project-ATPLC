<?php
include "db.php";
$lang = $_GET['lang'];
$res = mysqli_query($conn, "SELECT * FROM questions WHERE lang='$lang' ORDER BY RAND() LIMIT 5");
?>
<form action="result.php" method="POST">
<input type="hidden" name="lang" value="<?php echo $lang; ?>">
<?php while($q = mysqli_fetch_assoc($res)) { ?>
  <p><b><?php echo $q['question']; ?></b></p>
  <?php for ($i = 1; $i <= 4; $i++) { ?>
    <label><input type="radio" name="ans[<?php echo $q['id']; ?>]" value="<?php echo $i; ?>" required>
    <?php echo $q["option$i"]; ?></label><br>
  <?php } ?>
  <hr>
<?php } ?>
<button type="submit">Submit Quiz</button>
</form>
