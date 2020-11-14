<html>
<?php
if (isset($_POST['submit'])) {
  $bil = $_POST['bil'];
  $prima = true;
  for ($i = 2; $i < $bil; $i++) {
    if ($bil % $i == 0)
      $prima = false;
  }
  if ($prima) {
    $hasil = " Adalah bilangan prima";
  } else {
    $hasil = "Bukan bilangan prima";
  }
}
?>
   bilangan prima dari 1 – 50 <br><br>

<form method='post' action='prima.php'>
  <input type='text' name='bil' class='bil' autocomplete='off' placeholder='Masukin Angkanya'>
  <input type='submit' name='submit' value='submit' class='tombol'>
</form>
<?php if (isset($_POST['submit'])) { ?>
  <input type="text" value="<?php echo $hasil; ?>" class="bil">
<?php } else { ?>
  <input type="text" value="hihi" class="bil">
<?php } ?>
</html>